<?php

use yii\db\Migration;

/**
 * Class m200616_100700_table_keluarga
 */
class m200616_100700_table_keluarga extends Migration
{
	public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('keluarga', [
            'keluarga_id' => $this->primaryKey(),
            'keluarga_kode' => $this->string(45)->notNull(),
            'keluarga_kk' => $this->string(45),
            'dusun_rw_id' => $this->integer(11)->notNull(),
            'alamat' => $this->string(45),
            'FOREIGN KEY ([[dusun_rw_id]]) REFERENCES dusun_rw ([[dusun_rw_id]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('keluarga');
    }
}
