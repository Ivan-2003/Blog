<?php

namespace App\Http\Controllers\Repository;

use App\Models\Posts;
use App\Models\Category;
use App\Models\Tags;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostRepository
{
    public function storePost(Request $request)
    {
        $validate = $request->validate ([
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $post = Posts::create([
            'judul' => $request->judul,
            'category_id' =>  $request->category_id,
            'content' =>  $request->content,
            'gambar' => 'public/uploads/posts/'.$new_gambar,
            'slug' => Str::slug($request->judul),
            'users_id' => Auth::id()
        ]);

        $post->tags()->attach($request->tags);

        $gambar->move('public/uploads/posts/', $new_gambar);
        return redirect()->back()->with('success','Postingan anda berhasil disimpan'); 
    }

    public function updatePost(Request $request, $id)
    {
        $validate = $request->validate ([
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required'            
         ]);

        

        $post = Posts::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts/', $new_gambar);

        $post_data = [
            'judul' => $request->judul,
            'category_id' =>  $request->category_id,
            'content' =>  $request->content,
            'gambar' => 'public/uploads/posts/'.$new_gambar,
            'slug' => Str::slug($request->judul)
        ];
        }
        else{
        $post_data = [
            'judul' => $request->judul,
            'category_id' =>  $request->category_id,
            'content' =>  $request->content,            
            'slug' => Str::slug($request->judul)
        ];
        }
    

        $post->tags()->sync($request->tags);
        $post->update($post_data);

        
        return redirect()->route('post.index')->with('success','Postingan anda berhasil diupdate'); 


    }

    public function destroyPost($id)
    {
        $post = Posts::findorfail($id);
        $post->delete();

        return redirect()->back()->with('success','Post Berhasil Dihapus (Silahkan cek trashed post)');
    }

    public function restorePost($id){
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->restore();

        return redirect()->back()->with('success','Post Berhasil DiRestore (Silahkan cek list post)');
    }

    public function killPost($id){
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->forceDelete();

        return redirect()->back()->with('success','Post Berhasil Dihapus Secara Permanen');
    }
}