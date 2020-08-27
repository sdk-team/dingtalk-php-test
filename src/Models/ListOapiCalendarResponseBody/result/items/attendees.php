<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items;

use AlibabaCloud\Tea\Model;

class attendees extends Model {
    protected $_name = [
        'organizer' => 'organizer',
        'self' => 'self',
        'displayName' => 'display_name',
        'responseStatus' => 'response_status',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->organizer) {
            $res['organizer'] = $this->organizer;
        }
        if (null !== $this->self) {
            $res['self'] = $this->self;
        }
        if (null !== $this->displayName) {
            $res['display_name'] = $this->displayName;
        }
        if (null !== $this->responseStatus) {
            $res['response_status'] = $this->responseStatus;
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
        if(isset($map['organizer'])){
            $model->organizer = $map['organizer'];
        }
        if(isset($map['self'])){
            $model->self = $map['self'];
        }
        if(isset($map['display_name'])){
            $model->displayName = $map['display_name'];
        }
        if(isset($map['response_status'])){
            $model->responseStatus = $map['response_status'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 是否组织者
     * @var bool
     */
    public $organizer;

    /**
     * @description 是否自己
     * @var bool
     */
    public $self;

    /**
     * @description 展示姓名
     * @var string
     */
    public $displayName;

    /**
     * @description 响应状态（accepted, declined, needsAction）
     * @var string
     */
    public $responseStatus;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

}
