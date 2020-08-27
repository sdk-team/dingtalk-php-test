<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ChangeOapiRhinoSalesOrderCustomInfoStatusParams;

use AlibabaCloud\Tea\Model;

class salesOrderCustomInfoChangeReq extends Model {
    protected $_name = [
        'status' => 'status',
        'bizIdCustomerOrder' => 'biz_id_customer_order',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('bizIdCustomerOrder', $this->bizIdCustomerOrder, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->bizIdCustomerOrder) {
            $res['biz_id_customer_order'] = $this->bizIdCustomerOrder;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return salesOrderCustomInfoChangeReq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['biz_id_customer_order'])){
            $model->bizIdCustomerOrder = $map['biz_id_customer_order'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 2C订单状态
     * @var string
     */
    public $status;

    /**
     * @description 2C订单id
     * @var string
     */
    public $bizIdCustomerOrder;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

}
