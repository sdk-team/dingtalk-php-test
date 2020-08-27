<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresEmployeeProcessBestdeviceResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'workNo' => 'work_no',
        'deviceModelVersion' => 'device_model_version',
        'productionQuantity' => 'production_quantity',
        'deviceModelId' => 'device_model_id',
        'tenantId' => 'tenant_id',
        'processCapacityId' => 'process_capacity_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->workNo) {
            $res['work_no'] = $this->workNo;
        }
        if (null !== $this->deviceModelVersion) {
            $res['device_model_version'] = $this->deviceModelVersion;
        }
        if (null !== $this->productionQuantity) {
            $res['production_quantity'] = $this->productionQuantity;
        }
        if (null !== $this->deviceModelId) {
            $res['device_model_id'] = $this->deviceModelId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->processCapacityId) {
            $res['process_capacity_id'] = $this->processCapacityId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['work_no'])){
            $model->workNo = $map['work_no'];
        }
        if(isset($map['device_model_version'])){
            $model->deviceModelVersion = $map['device_model_version'];
        }
        if(isset($map['production_quantity'])){
            $model->productionQuantity = $map['production_quantity'];
        }
        if(isset($map['device_model_id'])){
            $model->deviceModelId = $map['device_model_id'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['process_capacity_id'])){
            $model->processCapacityId = $map['process_capacity_id'];
        }
        return $model;
    }
    /**
     * @description 工号
     * @var string
     */
    public $workNo;

    /**
     * @description 设备型号版本
     * @var string
     */
    public $deviceModelVersion;

    /**
     * @description 生产次数
     * @var int
     */
    public $productionQuantity;

    /**
     * @description 设备型号id
     * @var string
     */
    public $deviceModelId;

    /**
     * @description 租户
     * @var string
     */
    public $tenantId;

    /**
     * @description 结构化工序id
     * @var int
     */
    public $processCapacityId;

}
