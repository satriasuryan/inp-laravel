<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Category;
use App\Program;
use App\Development;
use App\DonationConfirmation;

class programController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->get();
        $program = Program::count();
        $programPublished = Program::where('isPublished', 1)->count();
        $programNotPublished = Program::where('isPublished', 0)->count();
        $programSelected = Program::where('isSelected', 1)->count();
        $category = Category::count();
        return view('back.program', compact('programs', 'program', 'programPublished', 'programNotPublished', 'programSelected', 'category'));
    }


    public function detail($id)
    {
        $program = Program::find($id);
        $devs = Development::all()->where('program_id', $program->id);
        $donatur = DonationConfirmation::where('program_id', $id)->where('verifikasi', 1)->count();
        return view('back.detailprogram', compact('program', 'devs', 'donatur'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('back.create', ['categories' => $categories]);
    }


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


   public function edit($id)
    {
        $categories = Category::all();
        $program = Program::find($id);
        return view('back.edit', compact('program', 'categories'));
    }


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


    public function destroy($id)
    {
        Program::destroy($id);
        return redirect()->back();
    }


    public function published($id){
        $program = Program::find($id);
        if($program->isPublished == 0){
            $program->update(['isPublished' => 1]);
        }else{
            $program->update(['isPublished' => 0]);
        }
        return redirect()->back();
    }


    public function selected($id){
        $program = Program::find($id);
        if($program->isSelected == 0){
            $program->update(['isSelected' => 1]);
        }else{
            $program->update(['isSelected' => 0]);
        }
        return redirect()->back();
    }
    

    public function createlaporanperkembangan($id)
    {
        $program = Program::find($id);
        return view('back.createdevelopment', ['program' => $program]);
    }


    public function storelaporanperkembangan(Request $request)
    {
        $dev = Development::create($request->all());
        return redirect()->route('detail', ['id' => $dev->program_id]);
    }
    
}
