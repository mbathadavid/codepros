<?php

namespace App\Modules\Payments\Controllers;

use App\Controllers\AdministratorController;
use App\Modules\Payments\Models\Payments_m;

use CodeIgniter\API\ResponseTrait;

class Administrator extends AdministratorController
{
    use ResponseTrait;

    //Index Function 
    public function index()
    {
        $data = [];
        helper(['form']);

        return view('App\Modules\Payments\Views\Admin\index', $data);
    }
}