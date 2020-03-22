<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mersing_schedule".
 *
 * @property int $id
 * @property string $day_date
 * @property string $mersing_tioman
 * @property string $tioman_mersing
 */
class MersingSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mersing_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day_date'], 'string', 'max' => 30],
            [['mersing_tioman', 'tioman_mersing'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'day_date' => Yii::t('app', 'Day / Date'),
            'mersing_tioman' => Yii::t('app', 'Mersing - Tioman'),
            'tioman_mersing' => Yii::t('app', 'Tioman - Mersing'),
        ];
    }

    /**
     * @inheritdoc
     * @return MersingScheduleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MersingScheduleQuery(get_called_class());
    }
}
