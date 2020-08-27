<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UnbindOapiSmartdeviceDeviceParams;

use AlibabaCloud\Tea\Model;

class deviceUnbindVo extends Model {
    protected $_name = [
        'pk' => 'pk',
        'deviceName' => 'device_name',
        'deviceId' => 'device_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('pk', $this->pk, true);
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
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deviceUnbindVo
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
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
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
     * @description 操作者id
     * @var string
     */
    public $userid;

}
