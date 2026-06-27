<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up(): void
    {
        $sql = "CREATE TABLE user (
            id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            username VARCHAR(75) NOT NULL DEFAULT '',
            password CHAR(64) NOT NULL DEFAULT '',
            role ENUM('Admin', 'Penjual', 'Pembeli') NOT NULL DEFAULT 'Pembeli',
            createdby INT(10) UNSIGNED NULL DEFAULT 0,
            createdat DATETIME NULL,
            updatedby INT(10) UNSIGNED NULL DEFAULT 0,
            updatedat DATETIME NULL,
            PRIMARY KEY (id)
        )";

        $this->db->query($sql);
    }

    public function down(): void
    {
        $this->db->query("DROP TABLE user");
    }
}
