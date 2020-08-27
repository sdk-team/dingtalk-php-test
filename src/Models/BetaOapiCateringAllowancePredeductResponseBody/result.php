<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BetaOapiCateringAllowancePredeductResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'deductedAmount' => 'deducted_amount',
        'mealPlanNo' => 'meal_plan_no',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deductedAmount) {
            $res['deducted_amount'] = $this->deductedAmount;
        }
        if (null !== $this->mealPlanNo) {
            $res['meal_plan_no'] = $this->mealPlanNo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['deducted_amount'])){
            $model->deductedAmount = $map['deducted_amount'];
        }
        if(isset($map['meal_plan_no'])){
            $model->mealPlanNo = $map['meal_plan_no'];
        }
        return $model;
    }
    /**
     * @description 已经预抵扣的金额
     * @var int
     */
    public $deductedAmount;

    /**
     * @description 餐补规则编码
     * @var string
     */
    public $mealPlanNo;

}
