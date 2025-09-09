<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'John Doe',
                'email' => 'john@student.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role' => 'student'
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@instructor.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role' => 'instructor'
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin'
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
