<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecClothesUnperformedParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecClothesUnperformedParams\req\page;

class req extends Model {
    protected $_name = [
        'orderId' => 'order_id',
        'operationUids' => 'operation_uids',
        'tenantId' => 'tenant_id',
        'sizeCode' => 'size_code',
        'page' => 'page',
        'userid' => 'userid',
        'status' => 'status',
        'bizTypes' => 'biz_types',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('operationUids', $this->operationUids, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('sizeCode', $this->sizeCode, true);
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->operationUids) {
            $res['operation_uids'] = $this->operationUids;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->sizeCode) {
            $res['size_code'] = $this->sizeCode;
        }
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->bizTypes) {
            $res['biz_types'] = $this->bizTypes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['operation_uids'])){
            if(!empty($map['operation_uids'])){
                $model->operationUids = $map['operation_uids'];
            }
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['size_code'])){
            $model->sizeCode = $map['size_code'];
        }
        if(isset($map['page'])){
            $model->page = page::fromMap($map['page']);
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['status'])){
            if(!empty($map['status'])){
                $model->status = $map['status'];
            }
        }
        if(isset($map['biz_types'])){
            if(!empty($map['biz_types'])){
                $model->bizTypes = $map['biz_types'];
            }
        }
        return $model;
    }
    /**
     * @description 订单id
     * @var int
     */
    public $orderId;

    /**
     * @description 工序id
     * @var array
     */
    public $operationUids;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description 尺码信息
     * @var string
     */
    public $sizeCode;

    /**
     * @description 分页
     * @var page
     */
    public $page;

    /**
     * @description userId
     * @var string
     */
    public $userid;

    /**
     * @description 状态
     * @var array
     */
    public $status;

    /**
     * @description 业务类型
     * @var array
     */
    public $bizTypes;

}
