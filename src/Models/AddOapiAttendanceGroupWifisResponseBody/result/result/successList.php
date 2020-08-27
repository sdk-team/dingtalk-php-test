<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupWifisResponseBody\result\result;

use AlibabaCloud\Tea\Model;

class successList extends Model {
    protected $_name = [
        'foreignId' => 'foreign_id',
        'macAddr' => 'mac_addr',
        'ssid' => 'ssid',
        'wifiKey' => 'wifi_key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->foreignId) {
            $res['foreign_id'] = $this->foreignId;
        }
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
     * @return successList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['foreign_id'])){
            $model->foreignId = $map['foreign_id'];
        }
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
     * @description 业务方wifiId
     * @var string
     */
    public $foreignId;

    /**
     * @description mac地址
     * @var string
     */
    public $macAddr;

    /**
     * @description mac名称
     * @var string
     */
    public $ssid;

    /**
     * @description wifiKey
     * @var string
     */
    public $wifiKey;

}
