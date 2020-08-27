<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiSmartdeviceBindParams;

use AlibabaCloud\Tea\Model;

class deviceBindReqVo extends Model {
    protected $_name = [
        'deviceServiceId' => 'device_service_id',
        'nick' => 'nick',
        'deviceSn' => 'device_sn',
        'bizDeviceIdentity' => 'biz_device_identity',
        'deviceMac' => 'device_mac',
    ];
    public function validate() {
        Model::validateRequired('deviceServiceId', $this->deviceServiceId, true);
        Model::validateRequired('deviceSn', $this->deviceSn, true);
        Model::validateRequired('deviceMac', $this->deviceMac, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceServiceId) {
            $res['device_service_id'] = $this->deviceServiceId;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->deviceSn) {
            $res['device_sn'] = $this->deviceSn;
        }
        if (null !== $this->bizDeviceIdentity) {
            $res['biz_device_identity'] = $this->bizDeviceIdentity;
        }
        if (null !== $this->deviceMac) {
            $res['device_mac'] = $this->deviceMac;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deviceBindReqVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_service_id'])){
            $model->deviceServiceId = $map['device_service_id'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['device_sn'])){
            $model->deviceSn = $map['device_sn'];
        }
        if(isset($map['biz_device_identity'])){
            $model->bizDeviceIdentity = $map['biz_device_identity'];
        }
        if(isset($map['device_mac'])){
            $model->deviceMac = $map['device_mac'];
        }
        return $model;
    }
    /**
     * @description 产品型号ID
     * @var int
     */
    public $deviceServiceId;

    /**
     * @description 设备昵称
     * @var string
     */
    public $nick;

    /**
     * @description 设备SN
     * @var string
     */
    public $deviceSn;

    /**
     * @description 设备在3方的唯一标识
     * @var string
     */
    public $bizDeviceIdentity;

    /**
     * @description 设备MAC
     * @var string
     */
    public $deviceMac;

}
