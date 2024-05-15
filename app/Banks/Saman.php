<?php 

namespace App\Banks ;

use App\Bank ;

class Saman extends Bank
{
        //override setToken() for Saman bank based on the structure of token data
    public function setToken($token)
    {
        $this->token = $token['token'];
    }
}