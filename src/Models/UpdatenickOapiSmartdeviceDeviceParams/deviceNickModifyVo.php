<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdatenickOapiSmartdeviceDeviceParams;

use AlibabaCloud\Tea\Model;

class deviceNickModifyVo extends Model {
    protected $_name = [
        'pk' => 'pk',
        'deviceName' => 'device_name',
        'deviceId' => 'device_id',
        'nick' => 'nick',
    ];
    public function validate() {
        Model::validateRequired('pk', $this->pk, true);
        Model::validateRequired('nick', $this->nick, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pk) {
            $res['pk'] = $this->pk;
        }
        if (null !== $this->deviceName) {
            $res['device_name'] = $this->deviceName;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deviceNickModifyVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['pk'])){
            $model->pk = $map['pk'];
        }
        if(isset($map['device_name'])){
            $model->deviceName = $map['device_name'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        return $model;
    }
    /**
     * @description 产品标识
     * @var string
     */
    public $pk;

    /**
     * @description 设备名称，和设备id不能同时为空
     * @var string
     */
    public $deviceName;

    /**
     * @description 设备id，和设备名称不能同时为空
     * @var string
     */
    public $deviceId;

    /**
     * @description 新的昵称
     * @var string
     */
    public $nick;

}
