<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DonationConfirmation;
use App\Program;
use App\Category;
use App\User;
use App\Development;

class categoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('back.categories', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('back/editkategori', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->update($request->all());
        return redirect('admin/categories');
    }

    public function destroy($id){
        Category::destroy($id);
        return redirect()->back();
    }
}