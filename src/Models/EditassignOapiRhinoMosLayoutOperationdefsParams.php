<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\EditassignOapiRhinoMosLayoutOperationdefsParams\assignInfoModifyItems;

class EditassignOapiRhinoMosLayoutOperationdefsParams extends Model {
    protected $_name = [
        'assignInfoModifyItems' => 'assign_info_modify_items',
        'orderId' => 'order_id',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('assignInfoModifyItems', $this->assignInfoModifyItems, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->assignInfoModifyItems) {
            $res['assign_info_modify_items'] = [];
            if(null !== $this->assignInfoModifyItems && is_array($this->assignInfoModifyItems)){
                $n = 0;
                foreach($this->assignInfoModifyItems as $item){
                    $res['assign_info_modify_items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return EditassignOapiRhinoMosLayoutOperationdefsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['assign_info_modify_items'])){
            if(!empty($map['assign_info_modify_items'])){
                $model->assignInfoModifyItems = [];
                $n = 0;
                foreach($map['assign_info_modify_items'] as $item) {
                    $model->assignInfoModifyItems[$n++] = null !== $item ? assignInfoModifyItems::fromMap($item) : $item;
                }
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
     * @description 分配信息修改明细列表
     * @var array
     */
    public $assignInfoModifyItems;

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
     * @description 用户ID
     * @var string
     */
    public $userid;

}
