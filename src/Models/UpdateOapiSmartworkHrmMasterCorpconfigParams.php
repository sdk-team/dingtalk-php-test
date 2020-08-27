<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiSmartworkHrmMasterCorpconfigParams extends Model {
    protected $_name = [
        'status' => 'status',
        'tenantId' => 'tenant_id',
        'scopeCode' => 'scope_code',
    ];
    public function validate() {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('scopeCode', $this->scopeCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->scopeCode) {
            $res['scope_code'] = $this->scopeCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiSmartworkHrmMasterCorpconfigParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['scope_code'])){
            $model->scopeCode = $map['scope_code'];
        }
        return $model;
    }
    /**
     * @description 企业开通状态 1:开通 2:关闭
     * @var int
     */
    public $status;

    /**
     * @description 租户id
     * @var int
     */
    public $tenantId;

    /**
     * @description 业务类型
     * @var string
     */
    public $scopeCode;

}
