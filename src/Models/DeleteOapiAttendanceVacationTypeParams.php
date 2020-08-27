<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiAttendanceVacationTypeParams extends Model {
    protected $_name = [
        'leaveCode' => 'leave_code',
        'opUserid' => 'op_userid',
    ];
    public function validate() {
        Model::validateRequired('leaveCode', $this->leaveCode, true);
        Model::validateRequired('opUserid', $this->opUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->leaveCode) {
            $res['leave_code'] = $this->leaveCode;
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiAttendanceVacationTypeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['leave_code'])){
            $model->leaveCode = $map['leave_code'];
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        return $model;
    }
    /**
     * @description 假期类型唯一标识
     * @var string
     */
    public $leaveCode;

    /**
     * @description 操作员ID
     * @var string
     */
    public $opUserid;

}
