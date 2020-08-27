<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetflowOapiRhinoMosLayoutOperationdefResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetflowOapiRhinoMosLayoutOperationdefResponseBody\result\operationDefs;

class result extends Model {
    protected $_name = [
        'active' => 'active',
        'flowVersion' => 'flow_version',
        'operationDefs' => 'operation_defs',
        'orderId' => 'order_id',
        'tenantId' => 'tenant_id',
        'source' => 'source',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->flowVersion) {
            $res['flow_version'] = $this->flowVersion;
        }
        if (null !== $this->operationDefs) {
            $res['operation_defs'] = [];
            if(null !== $this->operationDefs && is_array($this->operationDefs)){
                $n = 0;
                foreach($this->operationDefs as $item){
                    $res['operation_defs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['active'])){
            $model->active = $map['active'];
        }
        if(isset($map['flow_version'])){
            $model->flowVersion = $map['flow_version'];
        }
        if(isset($map['operation_defs'])){
            if(!empty($map['operation_defs'])){
                $model->operationDefs = [];
                $n = 0;
                foreach($map['operation_defs'] as $item) {
                    $model->operationDefs[$n++] = null !== $item ? operationDefs::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        return $model;
    }
    /**
     * @description 是否激活/最大版本
     * @var bool
     */
    public $active;

    /**
     * @description 工序定义版本
     * @var int
     */
    public $flowVersion;

    /**
     * @description 工序定义列表
     * @var array
     */
    public $operationDefs;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 来源系统
     * @var string
     */
    public $source;

}
