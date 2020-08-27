<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAttendanceGroupMemberParams\updateParam;

class UpdateOapiAttendanceGroupMemberParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'groupId' => 'group_id',
        'scheduleFlag' => 'schedule_flag',
        'updateParam' => 'update_param',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('scheduleFlag', $this->scheduleFlag, true);
        Model::validateRequired('updateParam', $this->updateParam, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->scheduleFlag) {
            $res['schedule_flag'] = $this->scheduleFlag;
        }
        if (null !== $this->updateParam) {
            $res['update_param'] = null !== $this->updateParam ? $this->updateParam->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiAttendanceGroupMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['schedule_flag'])){
            $model->scheduleFlag = $map['schedule_flag'];
        }
        if(isset($map['update_param'])){
            $model->updateParam = updateParam::fromMap($map['update_param']);
        }
        return $model;
    }
    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 0表示从今天开始排班，1表示从明天
     * @var int
     */
    public $scheduleFlag;

    /**
     * @description 更新入参
     * @var updateParam
     */
    public $updateParam;

}
