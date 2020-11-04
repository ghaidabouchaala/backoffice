<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Services\UserService;

class PostController extends Controller
{
    protected $userService;
    protected $postService;
    public function __construct(PostService $postService, UserService $userService){
        $this->postService = $postService;
        $this->userService = $userService;
    }

    public function getPosts(){
        $user = $this->userService->retrieveUserFromToken();
        if (!$user) {
            return response()->json(['response' => 'NOT AUTHORIZED'],401);
        }
        return $this->postService->getAll();
    }

    public function addPost(Request $request){
        $user = $this->userService->retrieveUserFromToken();
        if (!$user) {
            return response()->json(['response' => 'NOT AUTHORIZED'],401);
        }
        if(!$request->has(['title','body','user_id'])){
            return response()->json(['bad request'],400);
        }

        $owner = $this->userService->getUserById($request->input('user_id'));
        if(!$owner){
            return response()->json(['not allowed'],400);
        }
        $post = $this->postService->add($request);
        return response()->json($post,200);
    }

    public function editPost(Request $request){
        $user = $this->userService->retrieveUserFromToken();
        if (!$user) {
            return response()->json(['response' => 'NOT AUTHORIZED'],401);
        }
        $owner = $this->userService->getUserById($request->input('user_id'));
        if(!$owner){
            return response()->json(['not allowed'],400);
        }

        $post = $this->postService->getPostById($request->input('id'));
        if(!$post){
            return response()->json(['post does not exist'],400);
        }

        $edited_post = $this->postService->edit($request,$post);
        return response()->json($edited_post,200);
    }

    public function deletePost($id){
        $user = $this->userService->retrieveUserFromToken();
        if (!$user) {
            return response()->json(['response' => 'NOT AUTHORIZED'],401);
        }
        $post = $this->postService->getPostById($id);
        if(!$post){
            return response()->json(['post does not exist'],400);
        }

        $this->postService->delete($id);
        return response()->json([ 'Post was deleted successfully'],200);
    }

}
