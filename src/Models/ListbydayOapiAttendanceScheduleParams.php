<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbydayOapiAttendanceScheduleParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'userId' => 'user_id',
        'dateTime' => 'date_time',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('dateTime', $this->dateTime, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->dateTime) {
            $res['date_time'] = $this->dateTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbydayOapiAttendanceScheduleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        if(isset($map['date_time'])){
            $model->dateTime = $map['date_time'];
        }
        return $model;
    }
    /**
     * @description 操作者userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 用户userId
     * @var string
     */
    public $userId;

    /**
     * @description 查询那天的数据
     * @var int
     */
    public $dateTime;

}
