<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::limit(10)->skip(0)->get();
        return View::make('admin.list_category',compact('categories'));
    }

    public function create()
    {
    	$categories = Category::pluck('name','id');
    	$categories[] = '';
        return View::make('admin.create_category',compact('categories'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $newCategory = Category::create(
            ['name' => $input['name'],
             'category_id' => $input['category_id']
             ]
        );

        $newCategory->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::pluck('name','id');
        $categories[] = null;
        return View::make('admin.edit_category',compact('category','categories'));
    }

    public function update(Request $request, $id)
    {
    	
    	$input = $request->all();
        $category = Category::find($id);

        $category->name = $input['name'];
        $category->category_id = $input['category_id'];

        $category->save();

    }

    public function destroy($id)
    {
        //
    }
}
