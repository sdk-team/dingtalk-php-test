<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoSalesOrderCustomInfoParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'batchId' => 'batch_id',
        'page' => 'page',
        'pageSize' => 'page_size',
        'plannedDeliveryTimeBegin' => 'planned_delivery_time_begin',
        'plannedDeliveryTimeEnd' => 'planned_delivery_time_end',
        'productOrderId' => 'product_order_id',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('productOrderId', $this->productOrderId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateMinimum('page', $this->page, 1);
        Model::validateMinimum('pageSize', $this->pageSize, 1);
        Model::validateMaximum('pageSize', $this->pageSize, 500);
        Model::validatePattern('plannedDeliveryTimeBegin', $this->plannedDeliveryTimeBegin, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('plannedDeliveryTimeEnd', $this->plannedDeliveryTimeEnd, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->batchId) {
            $res['batch_id'] = $this->batchId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->plannedDeliveryTimeBegin) {
            $res['planned_delivery_time_begin'] = $this->plannedDeliveryTimeBegin;
        }
        if (null !== $this->plannedDeliveryTimeEnd) {
            $res['planned_delivery_time_end'] = $this->plannedDeliveryTimeEnd;
        }
        if (null !== $this->productOrderId) {
            $res['product_order_id'] = $this->productOrderId;
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
        if(isset($map['batch_id'])){
            $model->batchId = $map['batch_id'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['planned_delivery_time_begin'])){
            $model->plannedDeliveryTimeBegin = $map['planned_delivery_time_begin'];
        }
        if(isset($map['planned_delivery_time_end'])){
            $model->plannedDeliveryTimeEnd = $map['planned_delivery_time_end'];
        }
        if(isset($map['product_order_id'])){
            $model->productOrderId = $map['product_order_id'];
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
     * @description 同步的2C订单批次id
     * @var int
     */
    public $batchId;

    /**
     * @description 页码
     * @var int
     */
    public $page;

    /**
     * @description 每页大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 计划交期-查询时间开始
     * @var string
     */
    public $plannedDeliveryTimeBegin;

    /**
     * @description 计划交期-查询时间结束
     * @var string
     */
    public $plannedDeliveryTimeEnd;

    /**
     * @description 生产订单id
     * @var int
     */
    public $productOrderId;

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
