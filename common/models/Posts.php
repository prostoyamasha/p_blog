<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $img
 * @property string $promo_text
 * @property string $full_text
 * @property integer $date
 * @property string $meta_key
 * @property string $meta_desc
 * @property integer $status
 *
 * @property Category $category
 * @property Category $category0
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'date', 'status'], 'integer'],
            [['promo_text', 'full_text'], 'string'],
            [['title', 'img', 'meta_key', 'meta_desc'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'img' => 'Img',
            'promo_text' => 'Promo Text',
            'full_text' => 'Full Text',
            'date' => 'Date',
            'meta_key' => 'Meta Key',
            'meta_desc' => 'Meta Desc',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
