<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User: Ing. Hector Curbelo Barrios
 */

abstract class apiServer extends  CI_Model
{
    private $api_server = "http://api.ssauto.com/index.php/";
    private $KEY = "8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";
    private $USER  = 'ssauto-connect';
    private $PASSW = 'IPC&B9LF88@x';

    /**
     * @return string
     */

    public function getApiServer()
    {
        return $this->api_server;
    }

    /**
     * @return string
     */

    public function getKEY()
    {
        return $this->KEY;
    }

    /**
     * @return string
     */

    public function getUSER()
    {
        return $this->USER;
    }

    /**
     * @return string
     */

    public function getPASSW()
    {
        return $this->PASSW;
    }
}