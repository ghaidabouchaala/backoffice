<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AddressService;
class AddressController extends Controller
{
    protected $address;
    public function __construct(AddressService $address){
        $this->address = $address;
    }

    public function getAddresses(){
        return $this->address->getAll();
    }
}
