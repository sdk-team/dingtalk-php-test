<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SearchOapiAttendanceShiftParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'shiftName' => 'shift_name',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('shiftName', $this->shiftName, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->shiftName) {
            $res['shift_name'] = $this->shiftName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAttendanceShiftParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['shift_name'])){
            $model->shiftName = $map['shift_name'];
        }
        return $model;
    }
    /**
     * @description 操作者userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 班次名称
     * @var string
     */
    public $shiftName;

}
