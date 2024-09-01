<?php

namespace App\Modules\Orders\Controllers;

use App\Controllers\CustomerController;
use App\Modules\Orders\Models\Orders_m;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Files\File;

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

        $data['unassigned'] = $model->customer_orders(4);
        $data['assignmenttypes'] = $this->assignmenttypes;
        $data['assignmentcharges'] = $this->assignmentcharges;
        $data['perpageassignments'] = $this->perpageassignments;
        $data['citationstyles'] = $this->citationstyles;
        $data['domains'] = $this->gen->populate('specializations','id','name');

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

        if ($this->request->getPost()) {
            $post = (object) $this->request->getPost();

            $files = $this->request->getFiles();

            $formdata = array(
                'type' => $post->assignmenttype,
                'citation' => $post->citation,
                'spacing' => $post->spacing,
                'topic' => $post->topic,
                'domain' => $post->domain,
                'language' => $post->language,
                'deadline' => $post->deadlinedate.' '.$post->deadlinetime,
                'instructions' => $post->instructions,
                'estimateprice' => $post->price,
                'created_at' => time(),
                'created_by' => auth()->user()->id 
            );

            //Create the Order
            $ok = $this->gen->insert_data('orders',$formdata);

            if ($ok) {
                //Upload Files
                $directoryPath = 'assets/uploads/' . date('Y') . '/' . date('M');

                if (!is_dir($directoryPath)) {
                    // Create the directory if it does not exist
                    mkdir($directoryPath, 0755, true);
                }

                if ($files) {
                    foreach ($files['filepond'] as $file) {
                        $filepath = null;
                        if ($file->move($directoryPath, $file->getRandomName())) {
                            $filepath = $directoryPath . '/' . $file->getName(); // Get the final path
                            
                            $filedata = array(
                                'order' => $ok,
                                'path' => $filepath,
                                'created_on' => time(),
                                'created_by' => auth()->user()->id
                            );
                        }

                        $kk = $this->gen->insert_data('files', $filedata);
                    }
                }

                return redirect()->to('customer/orders')->with('success', 'You have Successfully Created a new Order!');
            } else {
                return redirect()->to('customer/orders')->with('error', 'Something went wrong!');
            }
            

            // echo "<pre>";
            //         print_r($post);
            //         print_r($files);
            // echo "</pre>";
            // die;
        }

        return view('App\Modules\Orders\Views\Customer\add', $data);
    }

    //Invite Bids
    public function inviteBids($id) {
        $done = $this->gen->update_data('orders',['status' => 3],['id' => $id]);

        if ($done) {
            return redirect()->to('customer/orders')->with('success', 'You have Successfully Opened Order for bidding');
        } else {
            return redirect()->to('customer/orders')->with('error', 'Something went wrong. Please try again later!');
        }
        
    }
}
