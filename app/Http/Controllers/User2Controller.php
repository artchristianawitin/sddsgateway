<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;
    /**
     * The service to consume the User1 Microservice
     * @var User2Service
     */
    public $user2Service;
    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(User2Service $user2Service)
    {
        $this->user2Service = $user2Service;
    }

    public function getUsers()
    {
        return $this->successResponse($this->user2Service->getUsers1()); 
    }

    public function addUsers(Request $request)
    {
        return $this->successResponse($this->user2Service->addUsers1($request->all()));
    }

    public function showUser($id){
        return $this->successResponse($this->user2Service->showUser1($id));
    }

    public function updateUser(Request $request, $id)
    {
        return $this->successResponse($this->user2Service->updateUsers1($request->all(),$id));
    }

    public function deleteUser($id)
    {
        return $this->successResponse($this->user2Service->deleteUsers1($id));
    }




}

?>