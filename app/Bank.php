<?php

namespace App ;

use App\Banks\Mellat;
use App\Banks\Saman;

abstract class Bank
{

    protected $token ;


    //This method sets Token
    abstract public function setToken($token);


    //This method retrieve transactions 
    public function getTransaction()
    {

        //checking if any token is set
        if(! $this->token){
            throw new \Exception('Token is Not Set');
        }

          // Mock API response for Mellat Bank
          $mellatTransactions = '{
            "transactions": [
                { "id": 45, "amount": 250000, "datetime": "2023-08-23 11:25:36" },
                { "id": 44, "amount": -70000, "datetime": "2023-08-23 11:20:10" },
                { "id": 43, "amount": 100000, "datetime": "2023-08-23 08:05:06" }
            ]
        }';

        // Mock API response for Saman Bank
        $samanTransactions = '{
            "transactions": [
                { "id": 22, "amount": 150000, "datetime": "2023-08-23 10:15:22" },
                { "id": 21, "amount": -50000, "datetime": "2023-08-23 09:45:18" },
                { "id": 20, "amount": 80000, "datetime": "2023-08-23 09:30:05" }
            ]
        }';

        // return $mellatTransactions ;
        // var_dump($mellatTransactions);
        // die;

        if($this instanceof Mellat){
            $mellatTransactions = json_decode($mellatTransactions , true);
            return $mellatTransactions;
         
        }elseif($this instanceof Saman){
            $samanTransactions = json_decode($samanTransactions , true);
            return $samanTransactions;
            }

    }


}