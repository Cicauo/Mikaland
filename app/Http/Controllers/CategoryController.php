<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();

        return view('pages.category.category-data', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.category.category-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'location' => 'required',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'about' => 'required',
             'press_list' => 'required|mimes:pdf|max:2048',
             'brosur' => 'required|mimes:pdf|max:2048',
             'slogan' => 'required',
         ]);

         
         
         // Upload file gambar
         $imagePath = $request->file('image')->store('public/images');
         $imagePath = str_replace('public/', '', $imagePath);
         
         // Upload file press list
         $pressListPath = $request->file('press_list')->store('public/files');
         $pressListPath = str_replace('public/', '', $pressListPath);
         
         // Upload file brosur
         $brosurPath = $request->file('brosur')->store('public/files');
         $brosurPath = str_replace('public/', '', $brosurPath);
     
         $category = new Category([
             'name' => $request->input('name'),
             'location' => $request->input('location'),
             'image' => $imagePath,
             'about' => $request->input('about'),
             'press_list' => $pressListPath,
             'brosur' => $brosurPath,
             'slogan' => $request->input('slogan'),
         ]);

        
     
         $category->save();
//          $category = Category::find($category->id);
// var_dump($category)
     
         return redirect()->route('category.index')->with('success', 'Category has been created successfully.');
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
{
    $category = Category::where('slug', $slug)->firstOrFail();
    $categories = Category::all();
    return view('Guest.ListProjects', compact('category', 'categories'));
}

    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('category')->where('id', $id)->first();
        return view('pages.category.category-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
{
    $category = Category::findOrFail($request->id);
    // dd($request->all());
    if (!$category) {
        return redirect()->back()->with('error', 'Category not found');
    }

    $request->validate([
        'name' => 'required',
        'location' => 'required',
        'image' => 'required',
        'about' => 'required',
        'press_list' => 'required',
        'brosur' => 'required',
        'slogan' => 'required',
    ]);

    $category->update($request->all());

    return redirect('/category')
        ->with('success', 'Category updated successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('pages.category.index')
            ->with('success', 'Category deleted successfully');
    }
}
