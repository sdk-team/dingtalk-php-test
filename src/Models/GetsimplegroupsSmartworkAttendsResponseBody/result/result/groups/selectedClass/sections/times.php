<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups\selectedClass\sections;

use AlibabaCloud\Tea\Model;

class times extends Model {
    protected $_name = [
        'checkTime' => 'check_time',
        'checkType' => 'check_type',
        'across' => 'across',
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
        if (null !== $this->across) {
            $res['across'] = $this->across;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return times
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['across'])){
            $model->across = $map['across'];
        }
        return $model;
    }
    /**
     * @description 打卡时间
     * @var string
     */
    public $checkTime;

    /**
     * @description 打卡类型枚举（Onduty和OffDuty）
     * @var string
     */
    public $checkType;

    /**
     * @description 打卡时间跨度
     * @var int
     */
    public $across;

}
