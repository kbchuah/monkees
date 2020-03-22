<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[MersingSchedule]].
 *
 * @see MersingSchedule
 */
class MersingScheduleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return MersingSchedule[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MersingSchedule|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
