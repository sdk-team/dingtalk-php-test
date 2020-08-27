<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CountOapiRhinoMosExecClothesParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'clothesStatusList' => 'clothes_status_list',
        'orderId' => 'order_id',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->clothesStatusList) {
            $res['clothes_status_list'] = $this->clothesStatusList;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
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
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['clothes_status_list'])){
            if(!empty($map['clothes_status_list'])){
                $model->clothesStatusList = $map['clothes_status_list'];
            }
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
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
     * @description 衣服状态列表
     * @var array
     */
    public $clothesStatusList;

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
     * @description userid
     * @var string
     */
    public $userid;

}
