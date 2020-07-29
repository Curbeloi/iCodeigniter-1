<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User: Ing. Hector Curbelo Barrios
 */

get_instance()->load->iface('CrudModelInterface');

class Authenticate_mdl extends CI_Model implements CrudModelInterface
{
    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function create($array)
    {
        // TODO: Implement create() method.
    }

    public function update($array)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function getall()
    {
        // TODO: Implement getall() method.
    }

    public function validateAuth( $username, $uspswd)
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('SG_USER');
        $this->db->where('SG_USER_NAME', $username);
        $this->db->where('SG_USER_PASSW', $this->getHashedPassword( $uspswd ));
        $query = $this->db->get();
        $result = $query->result();
        //echo $this->db->last_query();
        $this->db->close();
        return $result;
    }

    private function getHashedPassword($plainPassword)
    {
        return sha1($plainPassword);
    }
}