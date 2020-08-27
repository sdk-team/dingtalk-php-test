<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ReworkOapiRhinoMosExecPerformParams extends Model {
    protected $_name = [
        'context' => 'context',
        'reworkStartId' => 'rework_start_id',
        'tenantId' => 'tenant_id',
        'toInactiveIds' => 'to_inactive_ids',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('reworkStartId', $this->reworkStartId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('toInactiveIds', $this->toInactiveIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
        if (null !== $this->reworkStartId) {
            $res['rework_start_id'] = $this->reworkStartId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->toInactiveIds) {
            $res['to_inactive_ids'] = $this->toInactiveIds;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ReworkOapiRhinoMosExecPerformParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['context'])){
            $model->context = $map['context'];
        }
        if(isset($map['rework_start_id'])){
            $model->reworkStartId = $map['rework_start_id'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['to_inactive_ids'])){
            if(!empty($map['to_inactive_ids'])){
                $model->toInactiveIds = $map['to_inactive_ids'];
            }
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        return $model;
    }
    /**
     * @description 执行上下文
     * @var string
     */
    public $context;

    /**
     * @description 要重新开始的工序执行ID
     * @var int
     */
    public $reworkStartId;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 要失效的工序执行ID列表
     * @var array
     */
    public $toInactiveIds;

    /**
     * @description 系统参数
     * @var string
     */
    public $userid;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

}
