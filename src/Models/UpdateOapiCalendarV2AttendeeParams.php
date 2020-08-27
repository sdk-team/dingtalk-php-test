<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCalendarV2AttendeeParams\attendees;

class UpdateOapiCalendarV2AttendeeParams extends Model {
    protected $_name = [
        'calendarId' => 'calendar_id',
        'eventId' => 'event_id',
        'attendees' => 'attendees',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('calendarId', $this->calendarId, true);
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('attendees', $this->attendees, true);
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
        if (null !== $this->attendees) {
            $res['attendees'] = [];
            if(null !== $this->attendees && is_array($this->attendees)){
                $n = 0;
                foreach($this->attendees as $item){
                    $res['attendees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiCalendarV2AttendeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['calendar_id'])){
            $model->calendarId = $map['calendar_id'];
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        if(isset($map['attendees'])){
            if(!empty($map['attendees'])){
                $model->attendees = [];
                $n = 0;
                foreach($map['attendees'] as $item) {
                    $model->attendees[$n++] = null !== $item ? attendees::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 日历id,目前仅支持传primary，表示修改的是“我的日程”下的日程
     * @var string
     */
    public $calendarId;

    /**
     * @description 加密后的日程Id
     * @var string
     */
    public $eventId;

    /**
     * @description 参与者列表
     * @var array
     */
    public $attendees;

    /**
     * @description 开放平台应用对应的AgentId
     * @var int
     */
    public $agentid;

}
