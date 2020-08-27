<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups\selectedClass\setting;

use AlibabaCloud\Tea\Model;

class restBeginTime extends Model {
    protected $_name = [
        'checkTime' => 'check_time',
    ];
    public function validate() {
        Model::validatePattern('checkTime', $this->checkTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
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
        return $model;
    }
    /**
     * @description 开始时间
     * @var string
     */
    public $checkTime;

}
