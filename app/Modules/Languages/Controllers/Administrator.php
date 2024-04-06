<?php

namespace App\Modules\Languages\Controllers;

use App\Controllers\AdministratorController;
use App\Modules\Languages\Models\Languages_m;
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

        $model = new Languages_m();

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
                $k = 0;

                foreach ($post->name as $key => $name) {
                    $form_data = array(
                        'name' => $name,
                        'created_at' => time()
                    );

                    $ok = $model->insert_data('languages',$form_data);

                   if ($ok) {
                        $k++;
                   }
                }

                return redirect()->to('admin/languages/add')->with('success', $k.' Langauges Successfully Added!');
                
            }
            else
            {
                $data['validation_errors'] = $validation->getErrors();
            }
        }
    
        $data['languages'] = $model->findAll();
        $data['pagetitle'] = 'Programmming Languages';

        return view('App\Modules\Languages\Views\Admin\index', $data);
    }

    function edit() {
        $model = new Languages_m();

        if($this->request->getPost())
        {
            $post = (object) $this->request->getPost();

            $validation = \Config\Services::validation();

            $done = $this->gen->update_data('languages',['name' => $post->name],['id' => $post->id]);
            
            if ($done) 
                {
                    return redirect()->to('admin/languages/add')->with('success', 'Successfully Edited!');
                }
                    else
                {
                    return redirect()->to('admin/languages/add')->with('error', 'Something went wrong!');
                }
        }
    }

    //Function to Add Frameworks
    function addframework() {
        $model = new Languages_m();

        if($this->request->getPost())
        {
            $post = (object) $this->request->getPost();
            $k = 0;

            $validation = \Config\Services::validation();

            
                foreach ($post->name as $key => $name) {
                    $form_data = array(
                        'lid' => $post->lid,
                        'name' => $name,
                        'created_at' => time()
                    );

                    $ok = $model->insert_data('frameworks',$form_data);

                   if ($ok) {
                        $k++;
                   }

                }

                return redirect()->to('admin/languages/add')->with('success', $k.' Frameworks Successfully Added!');
        }
    }

    //Function to get Frameworks by language id in ajax
    function getFrameworks($id) {
        $model = new Languages_m();

        $frameworks = $model->language_frameworks($id);
        $language = $model->find($id);

        $response = array(
            'language' => $language,
            'frameworks' => $frameworks
        );

        echo json_encode($response);
    }
   
}
