<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupWifisParams;

use AlibabaCloud\Tea\Model;

class wifiList extends Model {
    protected $_name = [
        'foreignId' => 'foreign_id',
        'macAddr' => 'mac_addr',
        'ssid' => 'ssid',
    ];
    public function validate() {
        Model::validateRequired('foreignId', $this->foreignId, true);
        Model::validateRequired('macAddr', $this->macAddr, true);
        Model::validateRequired('ssid', $this->ssid, true);
    }
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
        return $res;
    }
    /**
     * @param array $map
     * @return wifiList
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

}
