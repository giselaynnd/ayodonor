<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donor extends CI_Model
{
   public $rules = array(
        array(
            'field' => 'golonganDarah',
            'label' => 'Golongan Darah',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'rhesus',
            'label' => 'Rhesus',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'penyakit',
            'label' => 'Riwayat Penyakit yang diderita',
            'rules' => 'required|trim'
        )
    );
    public function register($id_tempat,$user)
    {
        $data = [
            'id_peserta'      => $user,
            'id_tempat'        => $id_tempat,
            'gol_darah'       => $this->input->post('golonganDarah', true),
            'rhesus'          => $this->input->post('rhesus', true),
            'penyakit'        => $this->input->post('penyakit', true)
        ];
        $this->db->insert('data_donor', $data);
        $data = array(
            'status' => 2
        );
        $where = array('id_peserta' => $user);
        $this->db->where($where)->update('peserta', $data);

    }
    public function getKetTempat($id)
    {
        $this->db->join('tempat_donor','data_donor.id_tempat=tempat_donor.id_tempat','LEFT OUTER');
        $query = $this->db->get_where('data_donor', ['id_peserta' => $id]);
        return $query->row_array();
    }
    public function getDatadonor($id)
    {

        $this->db->join('peserta','data_donor.id_peserta=peserta.id_peserta','LEFT OUTER');
        $query = $this->db->get_where('data_donor', ['data_donor.id_peserta' => $id]);
        return $query->row_array();
    }

}
