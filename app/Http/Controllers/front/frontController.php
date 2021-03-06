<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Program;
use App\Development;
use App\DonationConfirmation;
use App\User;
use Alert;

class frontController extends Controller
{
    public function index()
    {
        $programYangAda = Program::all()->where('isPublished', 1)->count();
        $programPilihan = Program::all()->where('isSelected', 1)->count();
        $orangBerdonasi = DonationConfirmation::all()->where('verifikasi', 1)->count();
        $programs = Program::orderBy('id', 'DESC')->where('isPublished', 1)->where('isSelected', 1)->latest()->paginate(4);
        $programsNew = Program::orderBy('id', 'DESC')->where('isPublished', 1)->paginate(6);

        // dd($programsNew);
        return view('front.welcome', compact('programs', 'programsNew', 'programYangAda', 'programPilihan', 'orangBerdonasi'));
    }

    public function donasi($id)
    {
        $program = Program::find($id);
        $devs = Development::where('program_id', $program->id)->latest()->get();
        $donatur = DonationConfirmation::where('program_id', $program->id)->where('verifikasi', 1)->latest()->count();
        return view('front.donasi', compact('program', 'devs', 'donatur'));
    }

    public function donasicreate($id)
    {
        $program = Program::find($id);
        return view('front.createdonasi', ['program' => $program]);
    }

    public function donasistore(Request $request)
    {
        $donatur = new DonationConfirmation;
        $id_donatur_terakhir = $donatur->max('id');
        $kode_awal = '12';
        $id_program = $request->program_id;
        $id_transaksi = $kode_awal . sprintf(abs($id_program + 2)) . sprintf("%03s", abs($id_donatur_terakhir + 1));
        $donatur->program_id = $request->program_id;
        $donatur->users_id = $request->users_id;
        $donatur->id_transaksi = $id_transaksi;
        $donatur->nama_donatur = $request->nama_donatur;
        $donatur->nominal_donasi = str_replace('.', '', $request->nominal_donasi);
        $donatur->email = $request->email;
        $donatur->dukungan = $request->dukungan;
        $donatur->save();
        return redirect()->route('thx', ['id' => $donatur->id]);
    }

    public function daftarprogram(Request $request)
    {
        if ($request->has('search')) {
            $programs = Program::where('title', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $programs = Program::where('isPublished', 1)->latest()->get();
        }
        $categories = Category::all();
        return view('front.daftarprogram', ['categories' => $categories], ['programs' => $programs]);
    }

    public function programcategory($id)
    {
        $programCategory = Category::find($id);
        $categories = Category::all();
        $programs = Program::all();
        return view('front.programcategory', compact('programCategory', 'categories', 'programs'));
    }

    public function konfirmasistore(Request $request, $id)
    {
        $konfirmasi = DonationConfirmation::where('id_transaksi', $id)->first();
        $program = Program::where('id', $konfirmasi->program_id)->first();
        if ($request->file('bukti_pembayaran')) {
            $file       = $request->file('bukti_pembayaran');
            $fileName   = $file->getClientOriginalName();
            $request->file('bukti_pembayaran')->move("images/bukti_pembayaran/", $fileName);
            $bukti = $konfirmasi->bukti_pembayaran = $fileName;
            $konfirmasi->update(['bukti_pembayaran' => $bukti]);
        }
        $program->update();

        return redirect()->route('thxkonfir', ['id' => $konfirmasi->id]);
    }

    public function thx($id)
    {
        $donatur = DonationConfirmation::find($id);
        $program = Program::where('id', $donatur->program_id)->first();
        return view('front.thx', compact('donatur', 'program'));
    }

    public function thxkonfir($id)
    {
        $donatur = DonationConfirmation::find($id);
        $program = Program::where('id', $donatur->program_id)->first();
        return view('front.thxkonfir', compact('donatur', 'program'));
    }
}
