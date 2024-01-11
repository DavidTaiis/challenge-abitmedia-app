<?php

namespace App\Processes;

use App\Http\Resources\UserResource;
use App\Http\Resources\FarmerResource;
use App\Http\Resources\UserTopResource;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class UserProcess
{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var UserValidator
     */
    private $userValidator;

    /**
     * ProductProcess constructor.
     * @param UserRepository $userRepository
     * @param UserValidator $userValidator
     */
    public function __construct(UserRepository $userRepository, userValidator $userValidator)
    {
        $this->userRepository = $userRepository;
        $this->userValidator = $userValidator;
        
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */

    public function getUser()
    {

        $user = $this->userRepository->findById(Auth::user()->id);

        UserResource::withoutWrapping();

        return new UserResource($user);
    }

    
    public function register($request)
    {
        $input = $request->all();
        $this->userValidator->register($input);
        $this->userRepository->register($input);
        
        return Response::json([
            'status' => 'success',
            'message' => '! Usuario creado exitosamente!',
        ], 200);
    }
}
