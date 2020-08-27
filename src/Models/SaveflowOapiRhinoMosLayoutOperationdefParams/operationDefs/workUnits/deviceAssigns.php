<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveflowOapiRhinoMosLayoutOperationdefParams\operationDefs\workUnits;

use AlibabaCloud\Tea\Model;

class deviceAssigns extends Model {
    protected $_name = [
        'deviceModelId' => 'device_model_id',
        'deviceModelName' => 'device_model_name',
        'deviceModelVersion' => 'device_model_version',
        'deviceId' => 'device_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceModelId) {
            $res['device_model_id'] = $this->deviceModelId;
        }
        if (null !== $this->deviceModelName) {
            $res['device_model_name'] = $this->deviceModelName;
        }
        if (null !== $this->deviceModelVersion) {
            $res['device_model_version'] = $this->deviceModelVersion;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deviceAssigns
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_model_id'])){
            $model->deviceModelId = $map['device_model_id'];
        }
        if(isset($map['device_model_name'])){
            $model->deviceModelName = $map['device_model_name'];
        }
        if(isset($map['device_model_version'])){
            $model->deviceModelVersion = $map['device_model_version'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        return $model;
    }
    /**
     * @description 设备模型ID
     * @var string
     */
    public $deviceModelId;

    /**
     * @description 设备模型名称
     * @var string
     */
    public $deviceModelName;

    /**
     * @description 设备模型版本
     * @var string
     */
    public $deviceModelVersion;

    /**
     * @description 设备ID
     * @var int
     */
    public $deviceId;

}
