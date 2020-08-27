<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class InactiveOapiRhinoMosExecPerformParams extends Model {
    protected $_name = [
        'tenantId' => 'tenant_id',
        'ids' => 'ids',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('ids', $this->ids, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->ids) {
            $res['ids'] = $this->ids;
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
     * @return InactiveOapiRhinoMosExecPerformParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['ids'])){
            if(!empty($map['ids'])){
                $model->ids = $map['ids'];
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
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 工序执行ID列表
     * @var array
     */
    public $ids;

    /**
     * @description 业务参数[这里先预留],这里是用户ID,比如钉钉用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

}
