<?php

namespace App\Http\Controllers\Repository;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryRepository
{
    public function storeCategory(Request $request)
    {
        $validate = $request->validate ([
            'name' => 'required|min:3'
        ]);


        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success','Ketegori berhasil disimpan');
    }

    public function updateCategory(Request $request, $id)
    {
        $validate = $request->validate ([
            'name' => 'required'
        ]);

        $category_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Category::whereId($id)->update($category_data);

        return redirect()->route('category.index')->with('success','Data Berhasil di Update');

    }

    public function destroyCategory($id)
    {
        $category = Category::findorfail($id);
        $category->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}