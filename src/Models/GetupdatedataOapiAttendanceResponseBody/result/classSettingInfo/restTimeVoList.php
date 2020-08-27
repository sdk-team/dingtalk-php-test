<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result\classSettingInfo;

use AlibabaCloud\Tea\Model;

class restTimeVoList extends Model {
    protected $_name = [
        'restEndTime' => 'rest_end_time',
        'restBeginTime' => 'rest_begin_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->restEndTime) {
            $res['rest_end_time'] = $this->restEndTime;
        }
        if (null !== $this->restBeginTime) {
            $res['rest_begin_time'] = $this->restBeginTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return restTimeVoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['rest_end_time'])){
            $model->restEndTime = $map['rest_end_time'];
        }
        if(isset($map['rest_begin_time'])){
            $model->restBeginTime = $map['rest_begin_time'];
        }
        return $model;
    }
    /**
     * @description 休息结束时间
     * @var int
     */
    public $restEndTime;

    /**
     * @description 休息开始时间
     * @var int
     */
    public $restBeginTime;

}
