<?php

namespace App\Modules\Writers\Controllers;

use App\Controllers\WriterController;
use App\Modules\Writers\Models\Writers_m;
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
    function update_profile() {
        echo "Complete Profile";
    }
    
}
