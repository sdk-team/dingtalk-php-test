<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupWifisParams\wifiList;

class AddOapiAttendanceGroupWifisParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'groupKey' => 'group_key',
        'wifiList' => 'wifi_list',
    ];
    public function validate() {
        Model::validateRequired('groupKey', $this->groupKey, true);
        Model::validateRequired('wifiList', $this->wifiList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->groupKey) {
            $res['group_key'] = $this->groupKey;
        }
        if (null !== $this->wifiList) {
            $res['wifi_list'] = [];
            if(null !== $this->wifiList && is_array($this->wifiList)){
                $n = 0;
                foreach($this->wifiList as $item){
                    $res['wifi_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiAttendanceGroupWifisParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['group_key'])){
            $model->groupKey = $map['group_key'];
        }
        if(isset($map['wifi_list'])){
            if(!empty($map['wifi_list'])){
                $model->wifiList = [];
                $n = 0;
                foreach($map['wifi_list'] as $item) {
                    $model->wifiList[$n++] = null !== $item ? wifiList::fromMap($item) : $item;
                }
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
     * @description wifi列表
     * @var array
     */
    public $wifiList;

}
