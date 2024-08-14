<?php

namespace App\Modules\Orders\Controllers;

use App\Controllers\CustomerController;
use App\Modules\Orders\Models\Orders_m;
use CodeIgniter\Shield\Entities\User;

use CodeIgniter\API\ResponseTrait;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Models\GeneralModel;

class Customer extends CustomerController
{
    use ResponseTrait;


    //Index Function 
    public function index()
    {
        $data = [];
        helper(['form']);

        $model = new Orders_m();
        $data['pageheading'] = 'My Orders';
        $data['title'] = 'My Orders';

        return view('App\Modules\Orders\Views\Customer\index', $data);
    }

    //Function to add New Order
    function add() {
        $data = [];
        $data['pageheading'] = 'New Order';
        $data['title'] = 'New Order';
        $data['assignmenttypes'] = $this->assignmenttypes;
        $data['assignmentcharges'] = $this->assignmentcharges;
        $data['perpageassignments'] = $this->perpageassignments;
        $data['citationstyles'] = $this->citationstyles;
        $data['domains'] = $this->gen->populate('specializations','id','name');

        return view('App\Modules\Orders\Views\Customer\add', $data);
    }
}
