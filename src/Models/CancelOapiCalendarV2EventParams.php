<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CancelOapiCalendarV2EventParams extends Model {
    protected $_name = [
        'calendarId' => 'calendar_id',
        'eventId' => 'event_id',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('calendarId', $this->calendarId, true);
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateMaxLength('calendarId', $this->calendarId, 64);
        Model::validateMaxLength('eventId', $this->eventId, 64);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->calendarId) {
            $res['calendar_id'] = $this->calendarId;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CancelOapiCalendarV2EventParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['calendar_id'])){
            $model->calendarId = $map['calendar_id'];
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 日历id,目前仅支持传“primary”，表示“我的日程”下的日程
     * @var string
     */
    public $calendarId;

    /**
     * @description 加密后的日程Id
     * @var string
     */
    public $eventId;

    /**
     * @description 开放平台应用对应的AgentId
     * @var int
     */
    public $agentid;

}
