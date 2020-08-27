<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecPerformParams\operations;

class CreateOapiRhinoMosExecPerformParams extends Model {
    protected $_name = [
        'operations' => 'operations',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('operations', $this->operations, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->operations) {
            $res['operations'] = [];
            if(null !== $this->operations && is_array($this->operations)){
                $n = 0;
                foreach($this->operations as $item){
                    $res['operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateOapiRhinoMosExecPerformParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['operations'])){
            if(!empty($map['operations'])){
                $model->operations = [];
                $n = 0;
                foreach($map['operations'] as $item) {
                    $model->operations[$n++] = null !== $item ? operations::fromMap($item) : $item;
                }
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
     * @description 工序执行记录
     * @var array
     */
    public $operations;

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
