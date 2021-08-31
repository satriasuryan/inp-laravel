<?php

namespace App\Http\Controllers\middle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Category;
use App\Program;
use App\Development;
use App\DonationConfirmation;

class programController extends Controller
{

    public function middle()
    {
        $unverif = DonationConfirmation::where('verifikasi', 0)->whereNotNull('bukti_pembayaran')->count();
        $verif = DonationConfirmation::where('verifikasi', 1)->whereNotNull('bukti_pembayaran')->count();
        $tidakupload = DonationConfirmation::where('bukti_pembayaran', null)->count();
        $donasis = DonationConfirmation::whereNotNull('bukti_pembayaran')->latest()->get();
        return view('middle.index', compact('unverif', 'verif', 'tidakupload', 'donasis'));
    }

    public function createlaporanperkembangan($id)
    {
        $program = Program::find($id);
        return view('middle.createdevelopment', ['program' => $program]);
    }

    public function storelaporanperkembangan(Request $request)
    {
        $dev = Development::create($request->all());
        return redirect()->route('detail', ['id' => $dev->program_id]);
    }

    public function detailprogram($id)
    {
        $program = Program::find($id);
        $devs = Development::all()->where('program_id', $program->id);
        $donatur = DonationConfirmation::where('program_id', $id)->where('verifikasi', 1)->count();
        return view('middle.detailprogram', compact('program', 'devs', 'donatur'));
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::latest()->get();
        $program = Program::count();
        $programPublished = Program::where('isPublished', 1)->count();
        $programNotPublished = Program::where('isPublished', 0)->count();
        $programSelected = Program::where('isSelected', 1)->count();
        $category = Category::count();
        // if time is up, this destroy
        return view('middle.program', compact('programs', 'program', 'programPublished', 'programNotPublished', 'programSelected', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('middle.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => ['required', 'max:100'],
            'donation_target' => ['required', 'numeric'],
            'donation_target' => ['required', 'min:7'],
            'description' => ['required'],
            'shelter_account_number' => ['required'],
        ]);

        $program = Program::create($request->all());
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('images/program-images/', $request->file('photo')->getClientOriginalName());
            $program->photo = $request->file('photo')->getClientOriginalName();
            $program->save();
        }
        $program->donation_target = str_replace('.', '', $request->donation_target);
        
        return redirect('/admin/program');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $program = Program::find($id);
        return view('middle.edit', compact('program', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $program = Program::find($id);
        $program->update($request->all());
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('images/program-images/', $request->file('photo')->getClientOriginalName());
            $program->photo = $request->file('photo')->getClientOriginalName();
            $program->update();
        }

        return redirect('admin/program');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Program::destroy($id);
        return redirect()->back();
    }
}
