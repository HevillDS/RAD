<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publications_comments".
 *
 * @property int $id
 * @property string $text
 * @property int $user_id
 * @property int $publication_id
 * @property int $status
 *
 * @property Publications $publication
 * @property User $user
 */
class PublicationsComments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publications_comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'publication_id', 'status'], 'integer'],
            [['text'], 'string', 'max' => 255],
            [['publication_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publications::className(), 'targetAttribute' => ['publication_id' => 'id']],
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
            'text' => 'Text',
            'user_id' => 'User ID',
            'publication_id' => 'Publication ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublication()
    {
        return $this->hasOne(Publications::className(), ['id' => 'publication_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
