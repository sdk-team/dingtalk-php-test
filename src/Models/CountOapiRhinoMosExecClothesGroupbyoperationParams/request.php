<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CountOapiRhinoMosExecClothesGroupbyoperationParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'activeCondition' => 'active_condition',
        'clothesStatusList' => 'clothes_status_list',
        'orderId' => 'order_id',
        'performStatusList' => 'perform_status_list',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->activeCondition) {
            $res['active_condition'] = $this->activeCondition;
        }
        if (null !== $this->clothesStatusList) {
            $res['clothes_status_list'] = $this->clothesStatusList;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->performStatusList) {
            $res['perform_status_list'] = $this->performStatusList;
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
        if(isset($map['active_condition'])){
            $model->activeCondition = $map['active_condition'];
        }
        if(isset($map['clothes_status_list'])){
            if(!empty($map['clothes_status_list'])){
                $model->clothesStatusList = $map['clothes_status_list'];
            }
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['perform_status_list'])){
            if(!empty($map['perform_status_list'])){
                $model->performStatusList = $map['perform_status_list'];
            }
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
     * @description 工序生效条件(ACTIVE/INACTIVE)
     * @var string
     */
    public $activeCondition;

    /**
     * @description 衣服生产状态列表
     * @var array
     */
    public $clothesStatusList;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

    /**
     * @description 工序执行状态
     * @var array
     */
    public $performStatusList;

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
