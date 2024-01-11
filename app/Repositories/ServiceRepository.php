<?php

namespace App\Repositories;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceRepository
{
    public function findById($id)
    {
        return Service::query()->find($id);
    }
    public function create($input)
    {
       
       $service = new Service();
       $service->item =  $input["item"];
       $service->price =  $input["price"];
       $service->sku =  $input["sku"];
       $service->save();
    }
    public function read($sku)
    {
        $service = Service::query()
            ->where('sku', $sku)
            ->first();
        return $service ?? null;
    }

    public function update($input)
    {
        $service = Service::query()
            ->where('id', $input['id'])
            ->first();
       
            if(isset($input['item'])){
                $service->item =  $input['item'];
            }
            if(isset($input['price'])){
                $service->price =  $input['price'];
            }
        
        $service->save();
        
    }

    public function delete($id)
    {
        $service = Service::find($id);
        if($service != null){
            $service->delete();
            return '!Item en Service eliminado exitosamente!';
        }
        else{
            return '!No existe item!';
        }
    }


}
