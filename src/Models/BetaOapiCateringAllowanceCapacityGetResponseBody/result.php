<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BetaOapiCateringAllowanceCapacityGetResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'deductCapacity' => 'deduct_capacity',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deductCapacity) {
            $res['deduct_capacity'] = $this->deductCapacity;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['deduct_capacity'])){
            $model->deductCapacity = $map['deduct_capacity'];
        }
        return $model;
    }
    /**
     * @description 可抵扣金额，单位为分
     * @var int
     */
    public $deductCapacity;

}
