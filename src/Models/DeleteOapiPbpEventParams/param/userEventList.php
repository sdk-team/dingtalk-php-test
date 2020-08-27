<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiPbpEventParams\param;

use AlibabaCloud\Tea\Model;

class userEventList extends Model {
    protected $_name = [
        'eventName' => 'event_name',
        'userid' => 'userid',
        'bizInstId' => 'biz_inst_id',
        'eventId' => 'event_id',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('bizInstId', $this->bizInstId, true);
        Model::validateRequired('eventId', $this->eventId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->eventName) {
            $res['event_name'] = $this->eventName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->bizInstId) {
            $res['biz_inst_id'] = $this->bizInstId;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userEventList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['event_name'])){
            $model->eventName = $map['event_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['biz_inst_id'])){
            $model->bizInstId = $map['biz_inst_id'];
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        return $model;
    }
    /**
     * @description 打卡事件名称
     * @var string
     */
    public $eventName;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 打卡业务实例id
     * @var string
     */
    public $bizInstId;

    /**
     * @description 打卡事件外部id，唯一键
     * @var string
     */
    public $eventId;

}
