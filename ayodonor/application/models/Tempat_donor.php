<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tempat_donor extends CI_Model
{
    public function fetch()
    {
        return $this->db->get('tempat_donor')->result_array();
    }
}
