<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ActiveflowOapiRhinoMosLayoutOperationdefParams extends Model {
    protected $_name = [
        'orderId' => 'order_id',
        'tenantId' => 'tenant_id',
        'flowVersion' => 'flow_version',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('flowVersion', $this->flowVersion, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->flowVersion) {
            $res['flow_version'] = $this->flowVersion;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ActiveflowOapiRhinoMosLayoutOperationdefParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['flow_version'])){
            $model->flowVersion = $map['flow_version'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
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
     * @description 版本
     * @var int
     */
    public $flowVersion;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

}
