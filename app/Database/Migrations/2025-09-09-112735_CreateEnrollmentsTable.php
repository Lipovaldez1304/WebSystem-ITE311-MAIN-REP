<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEnrollmentsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id'         => ['type' => 'INT', 'auto_increment' => true],
        'user_id'    => ['type' => 'INT'],
        'course_id'  => ['type' => 'INT'],
        'created_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('enrollments');
}

    public function down()
    {
        //
    }
}
