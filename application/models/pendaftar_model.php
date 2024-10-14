<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftar_model extends CI_Model {

public function getevent()
{
    return $this->db->get('pendaftar')->result_array();
}
    public function tambahpendaftaran()
    {
        $data =
        [
            "id_lomba" =>$this->input->post('id_lomba', true),
            "nama pendaftar" =>$this->input->post('nama pendaftar', true),
            "kelas" =>$this->input->post('kelas', true),
            "no_hp" =>$this->input->post('no_hp', true),
            "tgl_daftar" =>$this->input->post('tgl_daftar', true)
        ];
        $this->db->insert('pendaftar', $data);
    }
    public function getpendaftarById($id){
        return $this->db->get_where('pendaftar', ['id' =>$id])->row_array();

    }
}