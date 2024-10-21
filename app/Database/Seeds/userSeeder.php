<?php

namespace App\Database\Seeds;

use Codeigniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_user' => 'Administrator',
            'email_user' => 'geryybangsawan@gmail.com',
            'password_user' => password_hash('12345', PASSWORD_BCRYPT),

        ];
        $this->db->table('users')->insert($data);
    }
}
