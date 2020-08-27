<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncOapiAttendanceGroupScheduleParams\schedules;

class AsyncOapiAttendanceGroupScheduleParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'groupId' => 'group_id',
        'schedules' => 'schedules',
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
        if (null !== $this->schedules) {
            $res['schedules'] = [];
            if(null !== $this->schedules && is_array($this->schedules)){
                $n = 0;
                foreach($this->schedules as $item){
                    $res['schedules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AsyncOapiAttendanceGroupScheduleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['schedules'])){
            if(!empty($map['schedules'])){
                $model->schedules = [];
                $n = 0;
                foreach($map['schedules'] as $item) {
                    $model->schedules[$n++] = null !== $item ? schedules::fromMap($item) : $item;
                }
            }
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

    /**
     * @description 系统自动生成
     * @var array
     */
    public $schedules;

}
