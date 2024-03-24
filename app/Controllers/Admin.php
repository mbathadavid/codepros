<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data['pagetitle'] = 'Dashboard';

        return view('Dashboards/admin',$data);
    }
}
