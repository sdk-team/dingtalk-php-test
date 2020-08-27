<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCalendarResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'dingtalkCalendarId' => 'dingtalk_calendar_id',
        'invalidUserids' => 'invalid_userids',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dingtalkCalendarId) {
            $res['dingtalk_calendar_id'] = $this->dingtalkCalendarId;
        }
        if (null !== $this->invalidUserids) {
            $res['invalid_userids'] = $this->invalidUserids;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dingtalk_calendar_id'])){
            $model->dingtalkCalendarId = $map['dingtalk_calendar_id'];
        }
        if(isset($map['invalid_userids'])){
            if(!empty($map['invalid_userids'])){
                $model->invalidUserids = $map['invalid_userids'];
            }
        }
        return $model;
    }
    /**
     * @description dingtalkCalendarId
     * @var string
     */
    public $dingtalkCalendarId;

    /**
     * @description invalidUser
     * @var array
     */
    public $invalidUserids;

}
