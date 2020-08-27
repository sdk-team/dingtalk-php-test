<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiCalendarParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'calendarId' => 'calendar_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->calendarId) {
            $res['calendar_id'] = $this->calendarId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiCalendarParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['calendar_id'])){
            $model->calendarId = $map['calendar_id'];
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 日程id
     * @var string
     */
    public $calendarId;

}
