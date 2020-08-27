<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BetaOapiCateringMealconfigGetParams extends Model {
    protected $_name = [
        'mealDayOffset' => 'meal_day_offset',
    ];
    public function validate() {
        Model::validateRequired('mealDayOffset', $this->mealDayOffset, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->mealDayOffset) {
            $res['meal_day_offset'] = $this->mealDayOffset;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BetaOapiCateringMealconfigGetParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['meal_day_offset'])){
            $model->mealDayOffset = $map['meal_day_offset'];
        }
        return $model;
    }
    /**
     * @description 获取未来n天的可点餐时间（包括今天）如： 1， 则返回今天和明天的可点餐日期，最大值为13
     * @var int
     */
    public $mealDayOffset;

}
