<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\GeneralModel;

class RestrictFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
         $model = new GeneralModel();
         $profile = $model->user_profile();

        if ($profile->status == 2) {
            return redirect()->to('techie/profile/update');
        }

       
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // This method is not used in this example.
    }
}

?>