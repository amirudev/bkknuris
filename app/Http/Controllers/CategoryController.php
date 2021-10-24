<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        return view('admin.category.create', [
            'categories' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Category::create([
            'name_category' => $validated['name'],
            'keterangan' => $validated['description']
        ]);

        return redirect()->back()->with('success', 'Kategori "' . $validated['name'] . '" berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id_category)
    {
        //
        $category = Category::find($id_category);

        return view('admin.category.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id_category)
    {
        //
        if(!$id_category){
            return redirect()->back();
        }

        $category = Category::find($id_category);
        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $category = Category::find($request->id);

        $category->name_category = $request->name;
        $category->keterangan = $request->description;

        $category->save();

        return redirect()->back()->with('success', 'Kategori "' . $category->name_category . '" berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id_category)
    {
        //
        $category = Category::find($id_category);
        $name_category = $category->name_category;

        $category->delete();

        return redirect('/')->with('success', 'Kategori "' . $name_category . '" berhasil dihapus');
    }
}
