<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users_table extends CI_Migration {

    public function up()
    {
        $sql = "
            CREATE TABLE users (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,           -- Primary Key (Unique Identifier)
            username VARCHAR(50) NOT NULL UNIQUE,                -- Username, harus unik
            email VARCHAR(100) DEFAULT NULL,                  -- Email, harus unik
            password VARCHAR(255) NOT NULL,                      -- Password, di-hash (hash bcrypt, argon2, dll.)
            full_name VARCHAR(100) DEFAULT NULL,                 -- Nama lengkap user
            phone_number VARCHAR(15) DEFAULT NULL UNIQUE,               -- Nomor telepon, opsional
            role ENUM('admin', 'user', 'superuser') DEFAULT 'user', -- Role user, dengan default 'user'
            status ENUM('active', 'inactive', 'banned') DEFAULT 'active', -- Status akun
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,       -- Waktu akun dibuat
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Waktu terakhir diupdate
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        $this->db->query($sql);

        echo "Migrasi berhasil.\n";
    }

    public function down()
    {
        $this->dbforge->drop_table('users', TRUE);
        echo "Tabel berhasil dihapus.\n";
    }
}
