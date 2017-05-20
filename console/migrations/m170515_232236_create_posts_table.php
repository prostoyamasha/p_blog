<?php

use yii\db\Migration;

/**
 * Handles the creation of table `posts`.
 */
class m170515_232236_create_posts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'title' => $this->string(),
            'img' => $this->string(),
            'promo_text' => $this->text(),
            'full_text' => $this->text(),
            'date' => $this->integer()->unsigned(),
            'meta_key' => $this->string(),
            'meta_desc' => $this->string(),
            'status' => $this->integer(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}
