<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Processes\ServiceProcess;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * @var ServiceProcess
     */
    private $serviceProcess;

    /**
     * @param ServiceProcess $serviceProcess
     */
    public function __construct(ServiceProcess $serviceProcess)
    {
        $this->serviceProcess = $serviceProcess;
    }
    
    public function create(Request $request)
    {
        return $this->serviceProcess->create($request);
    }  
    public function read($item)
    {
        return $this->serviceProcess->read($item);
    }  
    public function update(Request $request)
    {
        return $this->serviceProcess->update($request);
    }  
    public function delete($id)
    {
        return $this->serviceProcess->delete($id);
    }  
}
