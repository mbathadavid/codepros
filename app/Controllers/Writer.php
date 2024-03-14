<?php

namespace App\Controllers;

class Writer extends BaseController
{
    public function index(): string
    {
        return view('Dashboards/writer');
    }
}
