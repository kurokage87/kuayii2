<?php

use yii\db\Migration;

/**
 * Class m180409_123025_penghulu_id_to_profil
 */
class m180409_123025_penghulu_id_to_profil extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('fk-pelaksanaan_nikah-penguhulu_id-user-id', 'pelaksanaan_nikah');
        $this->addForeignKey('fk-pelaksanaan_nikah-penguhulu_id-profil-id', 'pelaksanaan_nikah', 'penguhulu_id', 'profil', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180409_123025_penghulu_id_to_profil cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180409_123025_penghulu_id_to_profil cannot be reverted.\n";

        return false;
    }
    */
}
