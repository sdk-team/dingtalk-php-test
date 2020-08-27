<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupSmartworkAttendsResponseBody\result\result\classes\setting;

use AlibabaCloud\Tea\Model;

class restBeginTime extends Model {
    protected $_name = [
        'checkTime' => 'check_time',
        'checkType' => 'check_type',
    ];
    public function validate() {
        Model::validatePattern('checkTime', $this->checkTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
        }
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return restBeginTime
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        return $model;
    }
    /**
     * @description 开始时间
     * @var string
     */
    public $checkTime;

    /**
     * @description 类型OnDuty：休息开始，OffDuty：休息结束
     * @var string
     */
    public $checkType;

}
