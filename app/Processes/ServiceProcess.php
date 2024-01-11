<?php

namespace App\Processes;

use App\Http\Resources\ServiceResource;
use App\Models\Service;
use App\Repositories\ServiceRepository;
use App\Validators\ServiceValidator;
use Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ServiceProcess
{
    /**
     * @var ServiceRepository
     */
    private $serviceRepository;
    /**
     * @var ServiceValidator
     */
    private $serviceValidator;

    /**
     * ProductProcess constructor.
     * @param ServiceRepository $serviceRepository
     * @param ServiceValidator $serviceValidator
     */
    public function __construct(ServiceRepository $serviceRepository, serviceValidator $serviceValidator)
    {
        $this->serviceRepository = $serviceRepository;
        $this->serviceValidator = $serviceValidator;
        
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */

    
     public function create($request)
    {
        $input = $request->all();
        $this->serviceValidator->create($input);
        $this->serviceRepository->create($input);
        
        return Response::json([
            'status' => 'success',
            'message' => '! Item en Service registrado exitosamente!',
        ], 200);
    }
    public function read($item)
    {

        $software = $this->serviceRepository->read($item);
        if($software != null){
            ServiceResource::withoutWrapping();

            return new ServiceResource($software);
        }else{
            return Response::json([
                'status' => 'success',
                'message' => '!No existe item relacionado!',
            ], 200);
        }
        
    }
    public function update($request)
    {
        $input = $request->all();
        $this->serviceValidator->update($input);
        $this->serviceRepository->update($input);
        
        return Response::json([
            'status' => 'success',
            'message' => '! Item en Service actualizado exitosamente!',
        ], 200);
    }

    public function delete($id)
    {
        $mesagge = $this->serviceRepository->delete($id);
        
        return Response::json([
            'status' => 'success',
            'message' => $mesagge,
        ], 200);
    }
}
