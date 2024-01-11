<?php

namespace App\Repositories;

use App\Models\Software;
use Illuminate\Support\Facades\Auth;

class SoftwareRepository
{
    public function findById($id)
    {
        return Software::query()->find($id);
    }

    public function findBySerial($serial)
    {
        $software = Software::query()
            ->where('serial', $serial)
            ->first();

        return $software ?? null;
    }
    public function create($input)
    {
       
       $software = new Software();
       $software->item =  $input["item"];
       $software->price =  $input["price"];
       $software->operative_system =  $input["operative_system"];
       $software->stock =  $input["stock"];
       $software->serial =  $input["serial"];
       $software->sku =  $input["sku"];
       $software->save();
    }
    public function read($sku)
    {
        $software = Software::query()
            ->where('sku', $sku)
            ->first();
        return $software ?? null;
    }

    public function update($input)
    {
        $software = Software::query()
            ->where('id', $input['id'])
            ->first();
       
            if(isset($input['item'])){
                $software->item =  $input['item'];
            }
            if(isset($input['price'])){
                $software->price =  $input['price'];
            }
            if(isset($input['operative_system'])){
            $software->operative_system =  $input['operative_system'];
            }
            if(isset($input['stock'])){
                $software->stock =  $input['stock'];
            }
        $software->save();
        
    }

    public function delete($id)
    {
        $software = Software::find($id);
        if($software != null){
            $software->delete();
            return '!Item en Software eliminado exitosamente!';
        }
        else{
            return '!No existe item!';
        }
    }


}
