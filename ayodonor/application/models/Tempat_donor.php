<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tempat_donor extends CI_Model
{
    public function fetch()
    {
        return $this->db->get('tempat_donor')->result_array();
    }

    public function addTempatDonor()
    {
        $data  = [ 
            'nama_tempat' => $this->input->post('nama_tempat', true),
            'alamat_tempat' => $this->input->post('alamat_tempat', true),
            'status' => $this->input->post('alamat_tempat', true),  
        ];
        $this->db->insert('tempat_donor', $data);
    }
    public function editTempatDonor()
    {
        
        $where = array('id_tempat' => $this->input->post('id_tempat'));
        $data = [
            'nama_tempat' => $this->input->post('nama', true),
            'alamat_tempat' => $this->input->post('alamat', true),
            'status' => $this->input->post('status', true),
        ];
        $this->db->where($where)->update('tempat_donor', $data);
    }
    public function delete($id)
    {
        $this->db->delete('tempat_donor', array('id_tempat' => $id));
    }
}

