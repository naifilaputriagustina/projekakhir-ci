<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user_model extends CI_Model {
public function simpanUser()
{
$data =
[
    "nama" => $this->input->post('nama', true),
    "username" => $this->input->post('username', true),
    "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT)

];
$this->db->insert('user', $data);
}
}