<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_ci_sessions_table extends CI_Migration {

    public function up()
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS `ci_sessions` (
            `id` varchar(128) NOT NULL,
            `ip_address` varchar(45) NOT NULL,
            `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
            `data` blob NOT NULL,
            KEY `ci_sessions_timestamp` (`timestamp`)
            );
        ";
        $this->db->query($sql);

        echo "Migrasi berhasil.\n";
    }

    public function down()
    {
        $this->dbforge->drop_table('ci_sessions', TRUE);
        echo "Tabel berhasil dihapus.\n";
    }
}
