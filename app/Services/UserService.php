<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Models\User;

class UserService{

    public function __construct(User $user){
        $this->user = $user;
    }

    public function getAll(){
        return User::all();
    }
    public function getUserById($id){
        return User::where('id','=',$id)->first();
    }
    public function retrieveUserFromToken()
    {
        try {
            return auth()->user();
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            $refreshed = JWTAuth::refresh(JWTAuth::getToken());
            $user = JWTAuth::setToken($refreshed)->toUser();
            header('Authorization: Bearer ' . $refreshed);
            return $user;
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return null;
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return null;
        }
    }

}
