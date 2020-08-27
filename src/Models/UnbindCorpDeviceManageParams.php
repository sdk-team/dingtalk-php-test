<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UnbindCorpDeviceManageParams extends Model {
    protected $_name = [
        'deviceServiceId' => 'device_service_id',
        'deviceId' => 'device_id',
    ];
    public function validate() {
        Model::validateRequired('deviceServiceId', $this->deviceServiceId, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceServiceId) {
            $res['device_service_id'] = $this->deviceServiceId;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UnbindCorpDeviceManageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_service_id'])){
            $model->deviceServiceId = $map['device_service_id'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        return $model;
    }
    /**
     * @description 设备服务商ID
     * @var int
     */
    public $deviceServiceId;

    /**
     * @description 设备ID
     * @var string
     */
    public $deviceId;

}
