<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresEmployeeProcessBestdeviceParams;

use AlibabaCloud\Tea\Model;

class availableDeviceModels extends Model {
    protected $_name = [
        'deviceModelVersion' => 'device_model_version',
        'deviceModelId' => 'device_model_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceModelVersion) {
            $res['device_model_version'] = $this->deviceModelVersion;
        }
        if (null !== $this->deviceModelId) {
            $res['device_model_id'] = $this->deviceModelId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return availableDeviceModels
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_model_version'])){
            $model->deviceModelVersion = $map['device_model_version'];
        }
        if(isset($map['device_model_id'])){
            $model->deviceModelId = $map['device_model_id'];
        }
        return $model;
    }
    /**
     * @description 设备型号版本
     * @var string
     */
    public $deviceModelVersion;

    /**
     * @description 设备型号id
     * @var string
     */
    public $deviceModelId;

}
