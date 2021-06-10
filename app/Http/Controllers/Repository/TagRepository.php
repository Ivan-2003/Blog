<?php

namespace App\Http\Controllers\Repository;

use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagRepository
{
    public function storeTag(Request $request)
    {
        $validate = $request->validate ([
            'name' => 'required|max:20|min:3'
        ]);

        Tags::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success','Data berhasil disimpan');
    }

    public function updateTag(Request $request, $id)
    {
        $validate = $request->validate ([
            'name' => 'required|max:20|min:3'
        ]);

        $tag_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Tags::whereId($id)->update($tag_data);

        return redirect()->route('tag.index')->with('success','Data sudah diupdate');
    }

    public function destroyTag($id)
    {
        $tags = Tags::findorfail($id);
        $tags->delete();

        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}