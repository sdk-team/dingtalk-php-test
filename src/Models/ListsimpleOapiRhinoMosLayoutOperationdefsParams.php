<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListsimpleOapiRhinoMosLayoutOperationdefsParams extends Model {
    protected $_name = [
        'operationUids' => 'operation_uids',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('operationUids', $this->operationUids, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->operationUids) {
            $res['operation_uids'] = $this->operationUids;
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
     * @return ListsimpleOapiRhinoMosLayoutOperationdefsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['operation_uids'])){
            if(!empty($map['operation_uids'])){
                $model->operationUids = $map['operation_uids'];
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
     * @description 工序唯一ID
     * @var array
     */
    public $operationUids;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

}
