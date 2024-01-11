<?php

namespace App\Processes;

use App\Http\Resources\SoftwareResource;
use App\Models\User;
use App\Repositories\SoftwareRepository;
use App\Validators\SoftwareValidator;
use Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SoftwareProcess
{
    /**
     * @var SoftwareRepository
     */
    private $softwareRepository;
    /**
     * @var SoftwareValidator
     */
    private $softwareValidator;

    /**
     * ProductProcess constructor.
     * @param SoftwareRepository $softwareRepository
     * @param SoftwareValidator $softwareValidator
     */
    public function __construct(SoftwareRepository $softwareRepository, softwareValidator $softwareValidator)
    {
        $this->softwareRepository = $softwareRepository;
        $this->softwareValidator = $softwareValidator;
        
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */

    
     public function create($request)
    {
        $input = $request->all();
       
        $this->softwareValidator->create($input);
        
        $existItem = true;
        $serial = 0;
        while ($existItem) {
            $serial = Str::random(100);
            $software = $this->softwareRepository->findBySerial($serial);
            $existItem = $software == null ? false : true;
        }
        $input['serial'] = $serial;
        $this->softwareRepository->create($input);
        
        return Response::json([
            'status' => 'success',
            'message' => '! Item en Software registrado exitosamente!',
        ], 200);
    }
    public function read($item)
    {

        $software = $this->softwareRepository->read($item);
        if($software != null){
            SoftwareResource::withoutWrapping();

            return new SoftwareResource($software);
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
        $this->softwareValidator->update($input);
        $this->softwareRepository->update($input);
        
        return Response::json([
            'status' => 'success',
            'message' => '! Item en Software actualizado exitosamente!',
        ], 200);
    }

    public function delete($id)
    {
        $mesagge = $this->softwareRepository->delete($id);
        
        return Response::json([
            'status' => 'success',
            'message' => $mesagge,
        ], 200);
    }
}
