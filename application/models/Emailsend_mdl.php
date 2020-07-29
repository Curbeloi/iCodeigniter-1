<?php

/**
 * Created by PhpStorm.
 * User: hcurbelo
 * Date: 1/23/2019
 * Time: 7:53 AM
 */
class Emailsend_mdl extends  CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public  function insertLog($item1, $item2, $item3, $email)
    {
        $log = array
        (
            'SL@SSR'  =>  trim($item1),
            'SLAN8'   =>  trim($item2),
            'SLLITM'  =>  trim($item3),
            'SL@EDT'  =>  substr((string)date('Ymd'),2),
            'SL@ETM'  =>  (string)date('His'),
            'SL@EML'  =>  $email
        );

        $this->load->database();
        if($this->db->insert('F56SDSL', $log))
        {
            $this->db->close();
            return TRUE;
        }
        else
        {
            $this->db->close();
            return FALSE;
        }

    }
}