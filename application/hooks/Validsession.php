<?php

/**
 * User: Ing. Hector Curbelo Barrios
 */
class Validsession
{
    function index()
    {
        $CI =& get_instance();
        //echo $CI->router->class;
        switch ($CI->router->class)
        {
            case 'Authenticate':
                return true;
            break;

            case 'pages':
                return true;
            break;    
                  
            default:
                $this->sessioncheck($CI);
            break;
        }
        unset($CI);
    }

    private  function sessioncheck($CI)
    {
        $CI->load->library('session');
        $arrSesion = $CI->session->userdata('tokenstring');
        if(!is_null($arrSesion))
        {
            return true;
        }
        else
        {
            if($CI->router->class==='View')
            {
                header('Location:'.base_url());
            }
            else
            {
                echo json_encode(['status'=>false, 'sestatus'=>false]);
                die();
            }
        }
    }
}