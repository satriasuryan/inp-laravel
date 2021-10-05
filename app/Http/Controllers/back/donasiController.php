<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DonationConfirmation;
use App\Program;
use App\Category;
use App\User;
use App\Development;

class donasiController extends Controller
{
    public function index()
    {
        $unverif = DonationConfirmation::where('verifikasi', 0)->whereNotNull('bukti_pembayaran')->count();
        $verif = DonationConfirmation::where('verifikasi', 1)->whereNotNull('bukti_pembayaran')->count();
        $tidakupload = DonationConfirmation::where('bukti_pembayaran', null)->count();
        $donasis = DonationConfirmation::latest()->get();
        return view('back.index', compact('unverif', 'verif', 'tidakupload', 'donasis'));
    }

    public function verifikasi($id)
    {
        $donasis = DonationConfirmation::where('id', $id)->find($id);
        $collected = DonationConfirmation::where('program_id', $donasis->program_id)->sum('nominal_donasi');
        $program = Program::where('id', $donasis->program_id)->first();
        $coba = $program->update(['donation_collected' => $collected]);
        if ($donasis->verifikasi == 0) {
            $donasis->update(['verifikasi' => 1, $coba]);
        }
        return redirect()->back();
    }

    

}