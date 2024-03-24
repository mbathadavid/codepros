<?php

namespace App\Modules\Users\Controllers;

use App\Controllers\WriterController;
use App\Modules\Users\Models\Groups_m;
use CodeIgniter\Shield\Entities\User;

use CodeIgniter\API\ResponseTrait;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Models\GeneralModel;

class Writer extends WriterController
{
    use ResponseTrait;

    //Funnction
    function myorders() {
        echo "My Orders";
    }
    
}
