<?php

use yii\db\Migration;

/**
 * Class m180624_065554_tambah_catin_dipelakasaan
 */
class m180624_065554_tambah_catin_dipelakasaan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pelaksanaan_nikah', 'id_suami', $this->integer());
        $this->addColumn('pelaksanaan_nikah', 'id_istri', $this->integer());
        
        $this->addForeignKey('fk-pelaksanaan_nikah-id_suami-data_catin-id', 'pelaksanaan_nikah', 'id_suami', 'data_catin', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-pelaksanaan_nikah-id_istri-data_catin-id', 'pelaksanaan_nikah', 'id_istri', 'data_catin', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180624_065554_tambah_catin_dipelakasaan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180624_065554_tambah_catin_dipelakasaan cannot be reverted.\n";

        return false;
    }
    */
}
