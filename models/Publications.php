<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publications".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $image
 * @property int $user_id
 * @property string $date
 * @property int $publications_category_id
 *
 * @property PublicationsCategories $publicationsCategory
 * @property User $user
 * @property PublicationsComments[] $publicationsComments
 */
class Publications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'publications_category_id'], 'integer'],
            [['date'], 'safe'],
            [['title', 'description', 'content', 'image'], 'string', 'max' => 255],
            [['publications_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => PublicationsCategories::className(), 'targetAttribute' => ['publications_category_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'Image',
            'user_id' => 'User ID',
            'date' => 'Date',
            'publications_category_id' => 'Publications Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublicationsCategory()
    {
        return $this->hasOne(PublicationsCategories::className(), ['id' => 'publications_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublicationsComments()
    {
        return $this->hasMany(PublicationsComments::className(), ['publication_id' => 'id']);
    }
}
