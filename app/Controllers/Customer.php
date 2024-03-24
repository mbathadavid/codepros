<?php

namespace App\Controllers;

class Writer extends BaseController
{
    public function index(): string
    {
        return view('Dashboards/customer');
    }

    public function customer(): string
    {
        return view('Dashboards/customer');
    }
}