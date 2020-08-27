<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items;

use AlibabaCloud\Tea\Model;

class organizer extends Model {
    protected $_name = [
        'self' => 'self',
        'displayName' => 'display_name',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->self) {
            $res['self'] = $this->self;
        }
        if (null !== $this->displayName) {
            $res['display_name'] = $this->displayName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return organizer
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['self'])){
            $model->self = $map['self'];
        }
        if(isset($map['display_name'])){
            $model->displayName = $map['display_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
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
     * @description 员工id
     * @var string
     */
    public $userid;

}
