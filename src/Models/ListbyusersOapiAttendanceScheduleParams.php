<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbyusersOapiAttendanceScheduleParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'userids' => 'userids',
        'fromDateTime' => 'from_date_time',
        'toDateTime' => 'to_date_time',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('userids', $this->userids, true);
        Model::validateRequired('fromDateTime', $this->fromDateTime, true);
        Model::validateRequired('toDateTime', $this->toDateTime, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->userids) {
            $res['userids'] = $this->userids;
        }
        if (null !== $this->fromDateTime) {
            $res['from_date_time'] = $this->fromDateTime;
        }
        if (null !== $this->toDateTime) {
            $res['to_date_time'] = $this->toDateTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbyusersOapiAttendanceScheduleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['userids'])){
            if(!empty($map['userids'])){
                $model->userids = $map['userids'];
            }
        }
        if(isset($map['from_date_time'])){
            $model->fromDateTime = $map['from_date_time'];
        }
        if(isset($map['to_date_time'])){
            $model->toDateTime = $map['to_date_time'];
        }
        return $model;
    }
    /**
     * @description 操作者userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 人员userIds
     * @var array
     */
    public $userids;

    /**
     * @description 起始日期
     * @var int
     */
    public $fromDateTime;

    /**
     * @description 结束日期
     * @var int
     */
    public $toDateTime;

}
