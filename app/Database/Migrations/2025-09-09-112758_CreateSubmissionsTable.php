<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubmissionsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id'         => ['type' => 'INT', 'auto_increment' => true],
        'quiz_id'    => ['type' => 'INT'],
        'user_id'    => ['type' => 'INT'],
        'answer'     => ['type' => 'TEXT'],
        'score'      => ['type' => 'FLOAT', 'null' => true],
        'created_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('submissions');
}


    public function down()
    {
        //
    }
}
