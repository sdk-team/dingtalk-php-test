<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiAttendanceGroupParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'groupId' => 'group_id',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('groupId', $this->groupId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiAttendanceGroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        return $model;
    }
    /**
     * @description 操作者userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

}
