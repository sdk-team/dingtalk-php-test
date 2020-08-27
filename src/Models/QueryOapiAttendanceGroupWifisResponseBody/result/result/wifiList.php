<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceGroupWifisResponseBody\result\result;

use AlibabaCloud\Tea\Model;

class wifiList extends Model {
    protected $_name = [
        'macAddr' => 'mac_addr',
        'ssid' => 'ssid',
        'wifiKey' => 'wifi_key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->macAddr) {
            $res['mac_addr'] = $this->macAddr;
        }
        if (null !== $this->ssid) {
            $res['ssid'] = $this->ssid;
        }
        if (null !== $this->wifiKey) {
            $res['wifi_key'] = $this->wifiKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return wifiList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['mac_addr'])){
            $model->macAddr = $map['mac_addr'];
        }
        if(isset($map['ssid'])){
            $model->ssid = $map['ssid'];
        }
        if(isset($map['wifi_key'])){
            $model->wifiKey = $map['wifi_key'];
        }
        return $model;
    }
    /**
     * @description mac地址
     * @var string
     */
    public $macAddr;

    /**
     * @description wifi名称
     * @var string
     */
    public $ssid;

    /**
     * @description wifiKey
     * @var string
     */
    public $wifiKey;

}
