<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAttendanceVacationQuotaResponseBody\result;

use AlibabaCloud\Tea\Model;

class quota extends Model {
    protected $_name = [
        'leaveCode' => 'leave_code',
        'userid' => 'userid',
        'quotaCycle' => 'quota_cycle',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->leaveCode) {
            $res['leave_code'] = $this->leaveCode;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->quotaCycle) {
            $res['quota_cycle'] = $this->quotaCycle;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return quota
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['leave_code'])){
            $model->leaveCode = $map['leave_code'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['quota_cycle'])){
            $model->quotaCycle = $map['quota_cycle'];
        }
        return $model;
    }
    /**
     * @description 假期类型唯一标识
     * @var string
     */
    public $leaveCode;

    /**
     * @description 员工ID
     * @var string
     */
    public $userid;

    /**
     * @description 额度所对应的周期(除了假期类型为调休的时候可以为空之外 其他情况均不能为空 且格式必须满足"yyyy")
     * @var string
     */
    public $quotaCycle;

}
