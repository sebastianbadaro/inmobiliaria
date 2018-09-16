<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function show()
    {
      $categories = Category::All();
      return view('categories.categories',compact('categories'));
    }

    public function delete(Category $category)
    {
      $category->delete();
      return redirect('/categorias/');
    }

    public function new()
    {
      $category = new Category();
      return view('categories.newCategory',compact('category'));
    }

    public function save(Request $request)
    {
      $category = new Category();

      $this->validate(
        $request,
        [
            'name' => 'required|max:20'

        ],
        [

        ],
        [
            'name' => 'nombre'
        ]
    );
    $category->fill($request->all());
    $category->save();

    return redirect('/categorias/');
    }

    public function edit(Category $category)
    {
        return view('categories.editcategory',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
      $this->validate(
        $request,
        [
            'name' => 'required|max:20'

        ],
        [

        ],
        [
            'name' => 'nombre'
        ]
    );
    $category->fill($request->all());
    $category->save();

    return redirect('/categorias/');
    }
}
