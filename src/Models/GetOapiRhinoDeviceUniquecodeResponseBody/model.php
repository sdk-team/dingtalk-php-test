<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoDeviceUniquecodeResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'supplierSn' => 'supplier_sn',
        'deleted' => 'deleted',
        'instanceId' => 'instance_id',
        'modelId' => 'model_id',
        'globalModelId' => 'global_model_id',
        'tenantId' => 'tenant_id',
        'attributes' => 'attributes',
        'id' => 'id',
        'supplierModelId' => 'supplier_model_id',
        'version' => 'version',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->supplierSn) {
            $res['supplier_sn'] = $this->supplierSn;
        }
        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->modelId) {
            $res['model_id'] = $this->modelId;
        }
        if (null !== $this->globalModelId) {
            $res['global_model_id'] = $this->globalModelId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->supplierModelId) {
            $res['supplier_model_id'] = $this->supplierModelId;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['supplier_sn'])){
            $model->supplierSn = $map['supplier_sn'];
        }
        if(isset($map['deleted'])){
            $model->deleted = $map['deleted'];
        }
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        if(isset($map['model_id'])){
            $model->modelId = $map['model_id'];
        }
        if(isset($map['global_model_id'])){
            $model->globalModelId = $map['global_model_id'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['supplier_model_id'])){
            $model->supplierModelId = $map['supplier_model_id'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        return $model;
    }
    /**
     * @description 厂商SN
     * @var string
     */
    public $supplierSn;

    /**
     * @description 是否已删除
     * @var bool
     */
    public $deleted;

    /**
     * @description 设备instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description 行业设备型号id
     * @var int
     */
    public $modelId;

    /**
     * @description 行业设备型号
     * @var string
     */
    public $globalModelId;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description 属性值
     * @var string
     */
    public $attributes;

    /**
     * @description 设备id
     * @var int
     */
    public $id;

    /**
     * @description 厂商设备型号id
     * @var int
     */
    public $supplierModelId;

    /**
     * @description 版本
     * @var string
     */
    public $version;

}
