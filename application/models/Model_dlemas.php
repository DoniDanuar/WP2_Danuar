<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dlemas_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function simpan_data($data)
    {
        // Proses penyimpanan data siswa ke dalam database
        return $this->db->insert('view_data_dlemas', $data);
    }
}
