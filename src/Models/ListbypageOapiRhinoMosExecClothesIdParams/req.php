<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypageOapiRhinoMosExecClothesIdParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypageOapiRhinoMosExecClothesIdParams\req\page;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypageOapiRhinoMosExecClothesIdParams\req\source;

class req extends Model {
    protected $_name = [
        'bizTypes' => 'biz_types',
        'orderId' => 'order_id',
        'page' => 'page',
        'sizeCode' => 'size_code',
        'source' => 'source',
        'statusList' => 'status_list',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizTypes) {
            $res['biz_types'] = $this->bizTypes;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->sizeCode) {
            $res['size_code'] = $this->sizeCode;
        }
        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->statusList) {
            $res['status_list'] = $this->statusList;
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
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_types'])){
            if(!empty($map['biz_types'])){
                $model->bizTypes = $map['biz_types'];
            }
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['page'])){
            $model->page = page::fromMap($map['page']);
        }
        if(isset($map['size_code'])){
            $model->sizeCode = $map['size_code'];
        }
        if(isset($map['source'])){
            $model->source = source::fromMap($map['source']);
        }
        if(isset($map['status_list'])){
            if(!empty($map['status_list'])){
                $model->statusList = $map['status_list'];
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
     * @description 业务类型
     * @var array
     */
    public $bizTypes;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

    /**
     * @description 分页
     * @var page
     */
    public $page;

    /**
     * @description 尺码CODE
     * @var string
     */
    public $sizeCode;

    /**
     * @description 来源
     * @var source
     */
    public $source;

    /**
     * @description 状态列表
     * @var array
     */
    public $statusList;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 预留参数
     * @var string
     */
    public $userid;

}
