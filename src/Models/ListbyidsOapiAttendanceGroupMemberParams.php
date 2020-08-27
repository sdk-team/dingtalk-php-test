<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbyidsOapiAttendanceGroupMemberParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'memberIds' => 'member_ids',
        'memberType' => 'member_type',
        'groupId' => 'group_id',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('memberIds', $this->memberIds, true);
        Model::validateRequired('memberType', $this->memberType, true);
        Model::validateRequired('groupId', $this->groupId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->memberIds) {
            $res['member_ids'] = $this->memberIds;
        }
        if (null !== $this->memberType) {
            $res['member_type'] = $this->memberType;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbyidsOapiAttendanceGroupMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['member_ids'])){
            if(!empty($map['member_ids'])){
                $model->memberIds = $map['member_ids'];
            }
        }
        if(isset($map['member_type'])){
            $model->memberType = $map['member_type'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        return $model;
    }
    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 成员id，可以是userId或者deptId
     * @var array
     */
    public $memberIds;

    /**
     * @description 0 表示员工，1表示部门
     * @var int
     */
    public $memberType;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

}
