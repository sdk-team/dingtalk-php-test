<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoCooperationCarrierResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'carrierName' => 'carrier_name',
        'carrierCode' => 'carrier_code',
        'carrierType' => 'carrier_type',
        'tenantId' => 'tenant_id',
        'carrierId' => 'carrier_id',
        'carrierTypeName' => 'carrier_type_name',
        'enabled' => 'enabled',
        'status' => 'status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->carrierName) {
            $res['carrier_name'] = $this->carrierName;
        }
        if (null !== $this->carrierCode) {
            $res['carrier_code'] = $this->carrierCode;
        }
        if (null !== $this->carrierType) {
            $res['carrier_type'] = $this->carrierType;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->carrierId) {
            $res['carrier_id'] = $this->carrierId;
        }
        if (null !== $this->carrierTypeName) {
            $res['carrier_type_name'] = $this->carrierTypeName;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['carrier_name'])){
            $model->carrierName = $map['carrier_name'];
        }
        if(isset($map['carrier_code'])){
            $model->carrierCode = $map['carrier_code'];
        }
        if(isset($map['carrier_type'])){
            $model->carrierType = $map['carrier_type'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['carrier_id'])){
            $model->carrierId = $map['carrier_id'];
        }
        if(isset($map['carrier_type_name'])){
            $model->carrierTypeName = $map['carrier_type_name'];
        }
        if(isset($map['enabled'])){
            $model->enabled = $map['enabled'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 载具名称
     * @var string
     */
    public $carrierName;

    /**
     * @description 载具code
     * @var string
     */
    public $carrierCode;

    /**
     * @description 载具类型
     * @var int
     */
    public $carrierType;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description 载具id
     * @var int
     */
    public $carrierId;

    /**
     * @description 载具类型名称
     * @var string
     */
    public $carrierTypeName;

    /**
     * @description 是否可用
     * @var bool
     */
    public $enabled;

    /**
     * @description 状态
     * @var int
     */
    public $status;

}
