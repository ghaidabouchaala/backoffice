<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Post;

class PostService{

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function getAll(){
        return Post::all();
    }
    public function add($request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = $request->input('user_id');
        $post->save();
        return $post;
    }

    public function getPostById($id){
        return POST::where('id','=',$id)->first();
    }

    public function edit($request,$post){
        if (!$post) {
            $post = new Post();
        }
        if( $request->has('title')){
            $post->title = $request['title'];
        }
        if( $request->has('body')){
            $post->body = $request['body'];
        }
        $post->update();
        return $post;
    }

    public function delete($id){
        return POST::where('id','=',$id)->delete();
    }

}
