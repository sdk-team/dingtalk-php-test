<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupSmartworkAttendsResponseBody\result\result\classes;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupSmartworkAttendsResponseBody\result\result\classes\setting\restBeginTime;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupSmartworkAttendsResponseBody\result\result\classes\setting\restEndTime;

class setting extends Model {
    protected $_name = [
        'restBeginTime' => 'rest_begin_time',
        'restEndTime' => 'rest_end_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->restBeginTime) {
            $res['rest_begin_time'] = null !== $this->restBeginTime ? $this->restBeginTime->toMap() : null;
        }
        if (null !== $this->restEndTime) {
            $res['rest_end_time'] = null !== $this->restEndTime ? $this->restEndTime->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return setting
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['rest_begin_time'])){
            $model->restBeginTime = restBeginTime::fromMap($map['rest_begin_time']);
        }
        if(isset($map['rest_end_time'])){
            $model->restEndTime = restEndTime::fromMap($map['rest_end_time']);
        }
        return $model;
    }
    /**
     * @description 休息开始时间
     * @var restBeginTime
     */
    public $restBeginTime;

    /**
     * @description 休息结束时间
     * @var restEndTime
     */
    public $restEndTime;

}
