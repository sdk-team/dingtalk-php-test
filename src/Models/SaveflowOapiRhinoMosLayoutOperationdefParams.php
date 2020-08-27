<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveflowOapiRhinoMosLayoutOperationdefParams\operationDefs;

class SaveflowOapiRhinoMosLayoutOperationdefParams extends Model {
    protected $_name = [
        'active' => 'active',
        'flowVersion' => 'flow_version',
        'operationDefs' => 'operation_defs',
        'orderId' => 'order_id',
        'tenantId' => 'tenant_id',
        'tmpSave' => 'tmp_save',
        'userid' => 'userid',
        'source' => 'source',
    ];
    public function validate() {
        Model::validateRequired('active', $this->active, true);
        Model::validateRequired('operationDefs', $this->operationDefs, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
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
        if (null !== $this->tmpSave) {
            $res['tmp_save'] = $this->tmpSave;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SaveflowOapiRhinoMosLayoutOperationdefParams
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
        if(isset($map['tmp_save'])){
            $model->tmpSave = $map['tmp_save'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        return $model;
    }
    /**
     * @description 是否生效
     * @var bool
     */
    public $active;

    /**
     * @description 工序版本(指定版本时版本如果已经存在则幂等)
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
     * @description 是否暂存
     * @var bool
     */
    public $tmpSave;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 来源系统
     * @var string
     */
    public $source;

}
