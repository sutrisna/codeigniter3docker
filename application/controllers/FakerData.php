<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FakerData extends CI_Controller {

    public function generate() {
        // Load Faker
        $faker = Faker\Factory::create();

        // Contoh membuat data palsu
        $data = [];
        for ($i = 0; $i < 1; $i++) {
            $data[] = [
                'username' => 'admin',
                'email' => $faker->email,
                'password' => password_hash('admin', PASSWORD_BCRYPT),
                'full_name' => $faker->name,
                'phone_number' => $faker->phoneNumber,
                'role' => 'superuser',
                'status' => 'active'
            ];
        }

        // Simpan ke database
        $this->db->insert_batch('users', $data);

        echo "1 rows of fake data inserted!";
    }
}
