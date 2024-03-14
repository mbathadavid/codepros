<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
         
        if (!auth()->loggedIn()) {
            return redirect()->to('login'); // Redirect to your login page.
        }

       
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // This method is not used in this example.
    }
}

?>