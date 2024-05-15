<?php 

namespace App\Banks ;

use App\Bank;

class Mellat extends Bank
{

    //override setToken() for Mellat bank based on the structure of token data
    public function setToken($token)
    {
        $this->token = $token['data']['access_token'];
    }
}