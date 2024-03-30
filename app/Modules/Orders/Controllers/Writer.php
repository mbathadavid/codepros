<?php

namespace App\Modules\Orders\Controllers;

use App\Controllers\WriterController;
use App\Modules\Orders\Models\Orders_m;
use CodeIgniter\Shield\Entities\User;

use CodeIgniter\API\ResponseTrait;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Models\GeneralModel;

class Writer extends WriterController
{
    use ResponseTrait;

    //Function index
    function index() {
        
    }


    //Funnction
    function bid() {
        echo "<pre>";
            print_r($this->profile);
        echo "</pre>";

        echo "You are about to bid an order";
    }
    
}
