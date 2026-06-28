<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Generate SHA-256 hash for the password
        $passwordSalt = 'Kantin123456UPB'; // 'Kantin' . '123456' . 'UPB'
        $hashedPassword = hash('sha256', $passwordSalt);

        // Current timestamp in the configured format
        $currentDateTime = date('Y-m-d H:i:s');

        // User data matching the user table schema
        $userData = [
            'username'   => 'Admin',
            'password'   => $hashedPassword,
            'role'       => 'Admin',
            'createdby'  => 0,
            'createdat'  => $currentDateTime,
            'updatedby'  => 0,
            'updatedat'  => $currentDateTime,
        ];

        // Insert using Query Builder
        $this->db->table('user')->insert($userData);
    }
}
