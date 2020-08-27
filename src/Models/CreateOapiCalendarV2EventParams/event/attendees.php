<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCalendarV2EventParams\event;

use AlibabaCloud\Tea\Model;

class attendees extends Model {
    protected $_name = [
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateMaxLength('userid', $this->userid, 64);
    }
    public function toMap() {
        $res = [];
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
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 员工工号
     * @var string
     */
    public $userid;

}
