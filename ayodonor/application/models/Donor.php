<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Model
{
    public function getEventById($id)
    {
        return  $this->db->get_where('events', ['id_event' => $id])->row_array();
    }
    public function getKet($id)
    {
        
        return $this->db->select('nama_tempat')->from('peserta')->join('data_donor','peserta.id_peserta = data_donor.id_peserta')->join('tempat_donor','data_donor.id_tempat = tempat_donor = id_tempat')->get()->result_array();
    }
}
