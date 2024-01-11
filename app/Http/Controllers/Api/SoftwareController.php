<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Processes\SoftwareProcess;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    /**
     * @var SoftwareProcess
     */
    private $SoftwareProcess;

    /**
     * @param SoftwareProcess $SoftwareProcess
     */
    public function __construct(SoftwareProcess $SoftwareProcess)
    {
        $this->SoftwareProcess = $SoftwareProcess;
    }
    
    public function create(Request $request)
    {
        return $this->SoftwareProcess->create($request);
    }  
    public function read($item)
    {
        return $this->SoftwareProcess->read($item);
    }  
    public function update(Request $request)
    {
        return $this->SoftwareProcess->update($request);
    }  
    public function delete($id)
    {
        return $this->SoftwareProcess->delete($id);
    }  
}
