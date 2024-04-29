<?php

namespace App\Modules\Writers\Controllers;

use App\Controllers\WriterController;
use App\Modules\Writers\Models\Writers_m;
use CodeIgniter\Shield\Entities\User;

use CodeIgniter\API\ResponseTrait;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Models\GeneralModel;
use PhpParser\Node\Stmt\Echo_;

class Writer extends WriterController
{
    use ResponseTrait;

      //Function index
    function index() {
        
    }
    


    //Funnction
    function update_profile() {
        $model = new Writers_m();
        $data["spec"] = $model->get_specializations();
        $data['lang'] = $model->get_languages();
        $data['frm'] = $model->get_frameworks();

        $data['writer'] = (object) $model->writer_details(auth()->id());

        return view('App\Modules\Writers\Views\Writer\update_profile', $data);
       
    }

    public function submit_profile()
    {
        $request = service('request');
        $model = new Writers_m();

        if ($request->getMethod() === 'post') {
            $userId = $this->request->getPost('user');

            // Get the submitted data
            $data = [
                'status' => 1,
                'first_name' => $this->request->getPost('first_name'),
                'last_name' => $this->request->getPost('last_name'),
                'username' => $this->request->getPost('username'),
                'phone' => $this->request->getPost('phone'),
                'profile_pic' => $this->request->getPost('profile_pic'),
                'country' => $this->request->getPost('country'),
                'language' => $this->request->getPost('language'),
                'about' => $this->request->getPost('about'),
                'spec' => serialize($this->request->getPost('spec')),
                'lang' => serialize($this->request->getPost('lang')),
                'framework' => serialize($this->request->getPost('framework')),
                'portifolio' => $this->request->getPost('portifolio'),
                'linkedin' => $this->request->getPost('linkedin'),
                'github' => $this->request->getPost('github'),
                'tc' => $this->request->getPost('t&c'),
                'modified_on' => time(),
                'modified_by' => $userId,
            ];

            $affectedRows = $model->updateprofile($userId, $data);

            if ($affectedRows) {
                return redirect()->to('techie/payments/payment_accounts');
            }
        }

    }

    function payment_accounts()
    {
        $model = new Writers_m();
        
       
        return view('App\Modules\Writers\Views\Writer\payment_accounts');
    }
    

    
}
