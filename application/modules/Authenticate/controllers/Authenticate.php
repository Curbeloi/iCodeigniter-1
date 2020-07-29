<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User: Ing. Hector Curbelo Barrios
 */

class Authenticate extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('authenticate_mdl');
        $this->load->library('session');
        $this->load->library('auth');
    }


    public function validateAuth()
    {
        $usname = $this->input->post('SG_USER_NAME');
        $uspswd = $this->input->post('SG_USER_PASSW');

        if (!empty($usname) && !empty($uspswd)) 
        {    
            $rslt = json_decode($this->authenticate_mdl->validateAuth( $usname, $uspswd );
            //var_dump($rslt);
            if( $rslt->status )
            {
                $token = $this->auth->SignIn($rslt);
                $this->sessionInitialice($token);
                echo json_encode(['status'=>TRUE, 'message' => $rslt->message, 'view' => 'main' ]);
            }
            else
            {
                echo json_encode($rslt);
            }
        }
        else
        {
            echo json_encode(['status' => FALSE,'data' => null, 'message' => 'Data is required']);
        }
    }

    private function sessionInitialice($token)
    {
        $this->session->set_userdata('tokenstring', $token);
    }
}