<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tg_gemuk_schedule".
 *
 * @property int $id
 * @property string $day_date
 * @property string $tg_gemuk_tioman
 * @property string $tioman_tg_gemuk
 */
class TgGemukSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tg_gemuk_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day_date'], 'string', 'max' => 30],
            [['tg_gemuk_tioman', 'tioman_tg_gemuk'], 'string', 'max' => 200],
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
            'tg_gemuk_tioman' => Yii::t('app', 'Tg Gemuk - Tioman'),
            'tioman_tg_gemuk' => Yii::t('app', 'Tioman - Tg Gemuk'),
        ];
    }

    /**
     * @inheritdoc
     * @return TgGemukScheduleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TgGemukScheduleQuery(get_called_class());
    }
}
