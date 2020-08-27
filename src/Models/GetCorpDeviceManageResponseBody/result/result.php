<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpDeviceManageResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'nick' => 'nick',
        'deviceId' => 'device_id',
        'deviceTypeName' => 'device_type_name',
        'deviceMac' => 'device_mac',
        'version' => 'version',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->deviceTypeName) {
            $res['device_type_name'] = $this->deviceTypeName;
        }
        if (null !== $this->deviceMac) {
            $res['device_mac'] = $this->deviceMac;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['device_type_name'])){
            $model->deviceTypeName = $map['device_type_name'];
        }
        if(isset($map['device_mac'])){
            $model->deviceMac = $map['device_mac'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        return $model;
    }
    /**
     * @description 设备昵称
     * @var string
     */
    public $nick;

    /**
     * @description 设备ID
     * @var string
     */
    public $deviceId;

    /**
     * @description 设备类型名称
     * @var string
     */
    public $deviceTypeName;

    /**
     * @description 设备Mac地址
     * @var string
     */
    public $deviceMac;

    /**
     * @description 设备硬件版本号
     * @var string
     */
    public $version;

}
