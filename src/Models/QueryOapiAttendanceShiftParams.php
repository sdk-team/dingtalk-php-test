<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiAttendanceShiftParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'shiftId' => 'shift_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->shiftId) {
            $res['shift_id'] = $this->shiftId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiAttendanceShiftParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['shift_id'])){
            $model->shiftId = $map['shift_id'];
        }
        return $model;
    }
    /**
     * @description 操作者userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 班次id
     * @var int
     */
    public $shiftId;

}
