<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceShiftParams\shift;

class AddOapiAttendanceShiftParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'shift' => 'shift',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('shift', $this->shift, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->shift) {
            $res['shift'] = null !== $this->shift ? $this->shift->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiAttendanceShiftParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['shift'])){
            $model->shift = shift::fromMap($map['shift']);
        }
        return $model;
    }
    /**
     * @description 操作人
     * @var string
     */
    public $opUserId;

    /**
     * @description 班次
     * @var shift
     */
    public $shift;

}
