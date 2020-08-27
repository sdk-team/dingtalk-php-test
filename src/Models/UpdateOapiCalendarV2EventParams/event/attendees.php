<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCalendarV2EventParams\event;

use AlibabaCloud\Tea\Model;

class attendees extends Model {
    protected $_name = [
        'userid' => 'userid',
        'attendeeStatus' => 'attendee_status',
    ];
    public function validate() {
        Model::validateMaxLength('userid', $this->userid, 64);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->attendeeStatus) {
            $res['attendee_status'] = $this->attendeeStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return attendees
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['attendee_status'])){
            $model->attendeeStatus = $map['attendee_status'];
        }
        return $model;
    }
    /**
     * @description 员工工号,若通过该接口新增或删除参会人，则该字段必填
     * @var string
     */
    public $userid;

    /**
     * @description 添加或者删除状态，add:添加；remove:删除；若通过该接口新增或删除参会人，则该字段必填
     * @var string
     */
    public $attendeeStatus;

}
