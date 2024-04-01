<?php

namespace App\Modules\Specializations\Controllers;

use App\Controllers\AdministratorController;
use App\Modules\Specializations\Models\Specializations_m;
use CodeIgniter\Shield\Entities\User;

use CodeIgniter\API\ResponseTrait;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Models\GeneralModel;

class Administrator extends AdministratorController
{
    use ResponseTrait;

    //Function to Create
    function create()
    {
        helper(['form']);

        $data = [];

        $model = new Specializations_m();

        if($this->request->getPost())
        {

            $validation = \Config\Services::validation();

            // Set validation rules for the form fields
            $validation->setRules([
                'name' => 'required',
            ]);


            if ($validation->withRequest($this->request)->run()) 
            {
                $post = (object) $this->request->getPost();

                // echo "<pre>";
                //     print_r($post);
                // echo "</pre>";
                // die;

                $form_data = array(
                    'name' => $post->name,
                    'description' => $post->description,
                    // 'created_by' => auth()->user()->id,
                    'created_at' => time()
                );

                $ok = $model->insert_data('specializations',$form_data);

                if ($ok) 
                {
                    return redirect()->to('admin/specializations/add')->with('success', 'Successfully Added!');
                }
                else
                {
                    return redirect()->to('admin/specializations/add')->with('error', 'Something went wrong!');
                }
            }
            else
            {
                $data['validation_errors'] = $validation->getErrors();
            }
        }
    
        $data['specializations'] = $model->findAll();
        $data['pagetitle'] = 'Areas of Specializations';

        return view('App\Modules\Specializations\Views\Admin\index', $data);
    }

    function edit() {
        $model = new Specializations_m();

        if($this->request->getPost())
        {
            $post = (object) $this->request->getPost();

            $validation = \Config\Services::validation();

            $done = $this->gen->update_data('specializations',['name' => $post->name,'description' => $post->description],['id' => $post->id]);
            
            if ($done) 
                {
                    return redirect()->to('admin/specializations/add')->with('success', 'Successfully Edited!');
                }
                    else
                {
                    return redirect()->to('admin/specializations/add')->with('error', 'Something went wrong!');
                }
        }
    }
   
}
