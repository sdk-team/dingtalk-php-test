<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RemoveOapiAttendanceGroupWifisParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'groupKey' => 'group_key',
        'wifiKeyList' => 'wifi_key_list',
    ];
    public function validate() {
        Model::validateRequired('groupKey', $this->groupKey, true);
        Model::validateRequired('wifiKeyList', $this->wifiKeyList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->groupKey) {
            $res['group_key'] = $this->groupKey;
        }
        if (null !== $this->wifiKeyList) {
            $res['wifi_key_list'] = $this->wifiKeyList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemoveOapiAttendanceGroupWifisParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['group_key'])){
            $model->groupKey = $map['group_key'];
        }
        if(isset($map['wifi_key_list'])){
            if(!empty($map['wifi_key_list'])){
                $model->wifiKeyList = $map['wifi_key_list'];
            }
        }
        return $model;
    }
    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserid;

    /**
     * @description 考勤组id
     * @var string
     */
    public $groupKey;

    /**
     * @description wifiKeyList
     * @var array
     */
    public $wifiKeyList;

}
