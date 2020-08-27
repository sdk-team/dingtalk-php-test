<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DetailOapiCalendarV2EventResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DetailOapiCalendarV2EventResponseBody\result\attendees;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DetailOapiCalendarV2EventResponseBody\result\end;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DetailOapiCalendarV2EventResponseBody\result\organizer;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DetailOapiCalendarV2EventResponseBody\result\start;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DetailOapiCalendarV2EventResponseBody\result\reminder;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DetailOapiCalendarV2EventResponseBody\result\location;

class result extends Model {
    protected $_name = [
        'attendees' => 'attendees',
        'calendarId' => 'calendar_id',
        'description' => 'description',
        'end' => 'end',
        'eventId' => 'event_id',
        'organizer' => 'organizer',
        'start' => 'start',
        'summary' => 'summary',
        'reminder' => 'reminder',
        'location' => 'location',
        'notificationType' => 'notification_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->attendees) {
            $res['attendees'] = [];
            if(null !== $this->attendees && is_array($this->attendees)){
                $n = 0;
                foreach($this->attendees as $item){
                    $res['attendees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->calendarId) {
            $res['calendar_id'] = $this->calendarId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->end) {
            $res['end'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        if (null !== $this->organizer) {
            $res['organizer'] = null !== $this->organizer ? $this->organizer->toMap() : null;
        }
        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->reminder) {
            $res['reminder'] = null !== $this->reminder ? $this->reminder->toMap() : null;
        }
        if (null !== $this->location) {
            $res['location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->notificationType) {
            $res['notification_type'] = $this->notificationType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['attendees'])){
            if(!empty($map['attendees'])){
                $model->attendees = [];
                $n = 0;
                foreach($map['attendees'] as $item) {
                    $model->attendees[$n++] = null !== $item ? attendees::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['calendar_id'])){
            $model->calendarId = $map['calendar_id'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['end'])){
            $model->end = end::fromMap($map['end']);
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        if(isset($map['organizer'])){
            $model->organizer = organizer::fromMap($map['organizer']);
        }
        if(isset($map['start'])){
            $model->start = start::fromMap($map['start']);
        }
        if(isset($map['summary'])){
            $model->summary = $map['summary'];
        }
        if(isset($map['reminder'])){
            $model->reminder = reminder::fromMap($map['reminder']);
        }
        if(isset($map['location'])){
            $model->location = location::fromMap($map['location']);
        }
        if(isset($map['notification_type'])){
            $model->notificationType = $map['notification_type'];
        }
        return $model;
    }
    /**
     * @description 日程参与者
     * @var array
     */
    public $attendees;

    /**
     * @description primary表示创建的日程在“我的日程”下
     * @var string
     */
    public $calendarId;

    /**
     * @description 日程描述
     * @var string
     */
    public $description;

    /**
     * @description 结束时间
     * @var end
     */
    public $end;

    /**
     * @description 日程id
     * @var string
     */
    public $eventId;

    /**
     * @description 日程组织者
     * @var organizer
     */
    public $organizer;

    /**
     * @description 开始时间
     * @var start
     */
    public $start;

    /**
     * @description 日程主题
     * @var string
     */
    public $summary;

    /**
     * @description 会议开始前提醒
     * @var reminder
     */
    public $reminder;

    /**
     * @description 地址
     * @var location
     */
    public $location;

    /**
     * @description 会前提醒方式
     * @var string
     */
    public $notificationType;

}
