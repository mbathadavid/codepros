<?php

namespace App\Modules\Writers\Controllers;

use App\Controllers\AdministratorController;
use App\Modules\Writers\Models\Writers_m;
use CodeIgniter\Shield\Entities\User;

use CodeIgniter\API\ResponseTrait;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Models\GeneralModel;

class Administrator extends AdministratorController
{
    use ResponseTrait;


    //Index Function 
    public function index()
    {
        $data = [];
        helper(['form']);

        $model = new Writers_m();
        $data['admins'] = $model->get_admin_users();
        $data['pagetitle'] = 'Users';

        return view('App\Modules\Users\Views\Admin\index', $data);
    }


}
