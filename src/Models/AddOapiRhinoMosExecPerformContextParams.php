<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiRhinoMosExecPerformContextParams extends Model {
    protected $_name = [
        'context' => 'context',
        'operationRecordIds' => 'operation_record_ids',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('context', $this->context, true);
        Model::validateRequired('operationRecordIds', $this->operationRecordIds, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
        if (null !== $this->operationRecordIds) {
            $res['operation_record_ids'] = $this->operationRecordIds;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
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
     * @return AddOapiRhinoMosExecPerformContextParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['context'])){
            $model->context = $map['context'];
        }
        if(isset($map['operation_record_ids'])){
            if(!empty($map['operation_record_ids'])){
                $model->operationRecordIds = $map['operation_record_ids'];
            }
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
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
     * @description 上下文
     * @var string
     */
    public $context;

    /**
     * @description 工序执行记录ID列表
     * @var array
     */
    public $operationRecordIds;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 业务参数，先预留ID
     * @var string
     */
    public $userid;

    /**
     * @description 订单ID
     * @var string
     */
    public $orderId;

}
