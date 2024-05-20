<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dlemas extends CI_Model
{
    public function simpan_data($data)
    {
        // Simpan data siswa ke dalam database
        $this->db->insert('view_form_dlemas', $data);
        
        // Anda bisa tambahkan kode lain di sini, misalnya penanganan error atau notifikasi
        
        return true; // Berhasil menyimpan data
    }

    // Anda dapat menambahkan metode lain di sini sesuai kebutuhan, misalnya untuk mengambil data siswa dari database
}