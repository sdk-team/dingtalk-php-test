<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCalendarV2AttendeeParams;

use AlibabaCloud\Tea\Model;

class attendees extends Model {
    protected $_name = [
        'attendeeStatus' => 'attendee_status',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('attendeeStatus', $this->attendeeStatus, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateMaxLength('attendeeStatus', $this->attendeeStatus, 32);
        Model::validateMaxLength('userid', $this->userid, 64);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->attendeeStatus) {
            $res['attendee_status'] = $this->attendeeStatus;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return attendees
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['attendee_status'])){
            $model->attendeeStatus = $map['attendee_status'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 添加或者删除状态，add:添加；remove:删除
     * @var string
     */
    public $attendeeStatus;

    /**
     * @description 员工工号
     * @var string
     */
    public $userid;

}
