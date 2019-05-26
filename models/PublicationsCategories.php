<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publications_categories".
 *
 * @property int $id
 * @property string $title
 *
 * @property Publications[] $publications
 */
class PublicationsCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publications_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublications()
    {
        return $this->hasMany(Publications::className(), ['publications_category_id' => 'id']);
    }
}
