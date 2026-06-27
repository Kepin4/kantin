<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLogsystem extends Migration
{
    public function up(): void
    {
        $sql = "CREATE TABLE logsystem (
            id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            iduser INT(11) UNSIGNED NULL DEFAULT 0,
            module VARCHAR(50) NOT NULL DEFAULT '',
            level VARCHAR(20) NOT NULL DEFAULT '',
            aksi VARCHAR(100) NOT NULL DEFAULT '',
            deskripsi TEXT NULL,
            createdby INT(10) UNSIGNED NULL DEFAULT 0,
            createdat DATETIME NULL,
            PRIMARY KEY (id)
        )";

        $this->db->query($sql);
    }

    public function down(): void
    {
        $this->db->query("DROP TABLE logsystem");
    }
}
