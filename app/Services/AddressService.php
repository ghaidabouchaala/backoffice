<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Address;

class AddressService{

    public function __construct(Address $address){
        $this->address = $address;
    }

    public function getAll(){
        return Address::all();
    }
}
