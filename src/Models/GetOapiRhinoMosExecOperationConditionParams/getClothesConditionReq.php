<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecOperationConditionParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecOperationConditionParams\getClothesConditionReq\condition;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecOperationConditionParams\getClothesConditionReq\page;

class getClothesConditionReq extends Model {
    protected $_name = [
        'condition' => 'condition',
        'page' => 'page',
        'sizeCodes' => 'size_codes',
        'status' => 'status',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = null !== $this->condition ? $this->condition->toMap() : null;
        }
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->sizeCodes) {
            $res['size_codes'] = $this->sizeCodes;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
     * @return getClothesConditionReq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['condition'])){
            $model->condition = condition::fromMap($map['condition']);
        }
        if(isset($map['page'])){
            $model->page = page::fromMap($map['page']);
        }
        if(isset($map['size_codes'])){
            if(!empty($map['size_codes'])){
                $model->sizeCodes = $map['size_codes'];
            }
        }
        if(isset($map['status'])){
            if(!empty($map['status'])){
                $model->status = $map['status'];
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
     * @description 实体条件
     * @var condition
     */
    public $condition;

    /**
     * @description 页信息
     * @var page
     */
    public $page;

    /**
     * @description 尺码
     * @var array
     */
    public $sizeCodes;

    /**
     * @description 状态
     * @var array
     */
    public $status;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description user_id
     * @var string
     */
    public $userid;

    /**
     * @description 租户
     * @var int
     */
    public $orderId;

}
