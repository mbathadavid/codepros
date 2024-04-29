<?php

namespace App\Modules\Bids\Controllers;

use App\Controllers\AdministratorController;
use App\Modules\Bids\Models\Bids_m;

use CodeIgniter\API\ResponseTrait;

class Administrator extends AdministratorController
{
    use ResponseTrait;

    //Index Function 
    public function index()
    {
        $data = [];
        helper(['form']);

        return view('App\Modules\Bids\Views\Admin\index', $data);
    }
}