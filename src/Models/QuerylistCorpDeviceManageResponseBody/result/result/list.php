<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerylistCorpDeviceManageResponseBody\result\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'nick' => 'nick',
        'deviceId' => 'device_id',
        'avatar' => 'avatar',
        'deviceTypeName' => 'device_type_name',
        'onLineStatus' => 'on_line_status',
        'deviceSn' => 'device_sn',
        'deviceMac' => 'device_mac',
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
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->deviceTypeName) {
            $res['device_type_name'] = $this->deviceTypeName;
        }
        if (null !== $this->onLineStatus) {
            $res['on_line_status'] = $this->onLineStatus;
        }
        if (null !== $this->deviceSn) {
            $res['device_sn'] = $this->deviceSn;
        }
        if (null !== $this->deviceMac) {
            $res['device_mac'] = $this->deviceMac;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['avatar'])){
            $model->avatar = $map['avatar'];
        }
        if(isset($map['device_type_name'])){
            $model->deviceTypeName = $map['device_type_name'];
        }
        if(isset($map['on_line_status'])){
            $model->onLineStatus = $map['on_line_status'];
        }
        if(isset($map['device_sn'])){
            $model->deviceSn = $map['device_sn'];
        }
        if(isset($map['device_mac'])){
            $model->deviceMac = $map['device_mac'];
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
     * @description 设备头像
     * @var string
     */
    public $avatar;

    /**
     * @description 设备类型名称
     * @var string
     */
    public $deviceTypeName;

    /**
     * @description 设备在线状态{1:在线，0:不在线}
     * @var int
     */
    public $onLineStatus;

    /**
     * @description 设备SN
     * @var string
     */
    public $deviceSn;

    /**
     * @description 设备MAC地址
     * @var string
     */
    public $deviceMac;

}
