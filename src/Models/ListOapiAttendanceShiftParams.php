<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiAttendanceShiftParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'cursor' => 'cursor',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiAttendanceShiftParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        return $model;
    }
    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 游标id
     * @var int
     */
    public $cursor;

}
