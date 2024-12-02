<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MigrationGenerator extends CI_Controller {
    
    public function run($version = NULL)
    {
        $this->load->library('migration');

        if ($version === NULL) {
            // Jalankan migrasi ke versi terbaru
            if ($this->migration->latest() === FALSE) {
                show_error($this->migration->error_string());
            } else {
                echo "Migrasi ke versi terbaru berhasil!";
            }
        } else {
            // Jalankan migrasi ke versi tertentu
            if ($this->migration->version($version) === FALSE) {
                show_error($this->migration->error_string());
            } else {
                echo "Migrasi ke versi $version berhasil!";
            }
        }
    }
}
