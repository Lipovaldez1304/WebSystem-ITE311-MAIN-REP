<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCoursesTable extends Migration
{
   public function up()
{
    $this->forge->addField([
        'id'           => ['type' => 'INT', 'auto_increment' => true],
        'title'        => ['type' => 'VARCHAR', 'constraint' => 100],
        'description'  => ['type' => 'TEXT', 'null' => true],
        'instructor_id'=> ['type' => 'INT'],
        'created_at'   => ['type' => 'DATETIME'],
        'updated_at'   => ['type' => 'DATETIME'],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('courses');
}

    public function down()
    {
        //
    }
}
