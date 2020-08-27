<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbyidsOapiAttendanceScheduleResultParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'scheduleIds' => 'schedule_ids',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('scheduleIds', $this->scheduleIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->scheduleIds) {
            $res['schedule_ids'] = $this->scheduleIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbyidsOapiAttendanceScheduleResultParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['schedule_ids'])){
            if(!empty($map['schedule_ids'])){
                $model->scheduleIds = $map['schedule_ids'];
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
     * @description 排班ids
     * @var array
     */
    public $scheduleIds;

}
