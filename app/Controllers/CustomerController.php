<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\GeneralModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class CustomerController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form'];
    protected $assignmenttypes;
    protected $assignmentcharges;
    protected $perpageassignments;
    protected $citationstyles;
    protected $domains;
    protected $gen;

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->assignmenttypes = [
            'Technical Writings' => [
                '1' => 'Technical Essays',
                '2' => 'PowerPoint Presentations with Speaker Notes'
            ],
            'Programming and Data' => [
                '3' => 'Simple Code Snippets (Short Assignments)',
                '4' => 'Medium Code Projects (e.g Websites,Portfolios,etc)',
                '5' => 'Custom Systems (With advanced features such as DB connection)',
                '6' => 'AI and Machine Learning Projects',
                '7' => 'Data Analysis (Python,R,SPSSS,Excel etc.)',
                '8' => 'Game Development',
                '9' => 'Mobile Apps'
            ],
            'Graphics and Designs' => [
                '10' => 'Bronchures, Banners, Logos, Postas etc.',
                '11' => 'Web and Mobile UI/UX'
            ],
            'Simulations' => [
                '12' => 'Simulations, e.g, Packet Tracer, Arduino, etc'
            ],
            'Others' => [
                '13' => 'Others'
            ]
        ];

        $this->assignmentcharges = [
            '1' => '12',
            '2' => '8',
            '3' => '20',
            '4' => '58',
            '5' => '170',
            '6' => '120',
            '7' => '60',
            '8' => '38',
            '9' => '170',
            '10' => '10',
            '11' => '12',
            '12' => '20',
            '13' => ''
        ];

        $this->perpageassignments = [1,2,10,11];

        $this->citationstyles = array(
            1 => 'MLA',
            2 => 'Chicago',
            3 => 'APA 6th Edition',
            4 => 'APA 7th Edition',
            5 => 'ASA',
            6 => 'Bluebook',
            7 => 'Havard',
            8 => 'IEEE',
            9 > 'Other',
            10 => 'Not Applicable'
        );

        $this->gen =  new \App\Models\GeneralModel();

        // E.g.: $this->session = \Config\Services::session();
    }
}
