<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function form(){
        return view('posts.form');
    }
    // Request $request:フォームから送信された情報を受け取っている
    public function store(Request $request){
        // POSTモデルに沿って、POSTインスタンス作成
        // $post=Post::create([
        //     'title'=>$request->title,
        //     'body'=>$request->body
        // ]);
        $validated = $request->validate([
            'title' => 'required | max:20',
            'body' => 'required | max:200'

        ]);
        $validated['user_id'] = auth()->id();
        $post = POST::create($validated);
        return back();
    }
    public function index(){
        $posts=POST::all();
        return view('posts.index', compact('posts'));

    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
       return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        $validated = $request->validate([
            'title' => 'required | max:20',
            'body' => 'required | max:200'

        ]);
        $validated['user_id'] = auth()->id();
        $post->update($validated);
        $request->session()->flash('message', '更新しました');
        return redirect()->route('post.index');
    }

    public function destroy(Request $request, Post $post){
        $post->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('post.index');
    }

}
