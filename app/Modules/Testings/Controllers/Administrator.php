<?php

namespace App\Modules\Testings\Controllers;

use App\Controllers\AdministratorController;
use App\Modules\Testings\Models\Testings_m;

use CodeIgniter\API\ResponseTrait;

class Administrator extends AdministratorController
{
    use ResponseTrait;

    //Index Function 
    public function index()
    {
        $data = [];
        helper(['form']);

        return view('App\Modules\Testings\Views\Admin\index', $data);
    }
}