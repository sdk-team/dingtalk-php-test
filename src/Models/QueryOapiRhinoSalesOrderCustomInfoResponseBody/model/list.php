<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoSalesOrderCustomInfoResponseBody\model;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'bizIdCustomerOrder' => 'biz_id_customer_order',
        'gmtOrderCreate' => 'gmt_order_create',
        'gmtPlannedDelivery' => 'gmt_planned_delivery',
        'imgUrl' => 'img_url',
        'productOrderId' => 'product_order_id',
        'quantity' => 'quantity',
        'sizeId' => 'size_id',
        'sizeName' => 'size_name',
        'gmtPlannedProductionFinished' => 'gmt_planned_production_finished',
        'skipCustomized' => 'skip_customized',
        'productionTime' => 'production_time',
        'status' => 'status',
    ];
    public function validate() {
        Model::validatePattern('gmtOrderCreate', $this->gmtOrderCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtPlannedDelivery', $this->gmtPlannedDelivery, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtPlannedProductionFinished', $this->gmtPlannedProductionFinished, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('productionTime', $this->productionTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizIdCustomerOrder) {
            $res['biz_id_customer_order'] = $this->bizIdCustomerOrder;
        }
        if (null !== $this->gmtOrderCreate) {
            $res['gmt_order_create'] = $this->gmtOrderCreate;
        }
        if (null !== $this->gmtPlannedDelivery) {
            $res['gmt_planned_delivery'] = $this->gmtPlannedDelivery;
        }
        if (null !== $this->imgUrl) {
            $res['img_url'] = $this->imgUrl;
        }
        if (null !== $this->productOrderId) {
            $res['product_order_id'] = $this->productOrderId;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->sizeId) {
            $res['size_id'] = $this->sizeId;
        }
        if (null !== $this->sizeName) {
            $res['size_name'] = $this->sizeName;
        }
        if (null !== $this->gmtPlannedProductionFinished) {
            $res['gmt_planned_production_finished'] = $this->gmtPlannedProductionFinished;
        }
        if (null !== $this->skipCustomized) {
            $res['skip_customized'] = $this->skipCustomized;
        }
        if (null !== $this->productionTime) {
            $res['production_time'] = $this->productionTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id_customer_order'])){
            $model->bizIdCustomerOrder = $map['biz_id_customer_order'];
        }
        if(isset($map['gmt_order_create'])){
            $model->gmtOrderCreate = $map['gmt_order_create'];
        }
        if(isset($map['gmt_planned_delivery'])){
            $model->gmtPlannedDelivery = $map['gmt_planned_delivery'];
        }
        if(isset($map['img_url'])){
            $model->imgUrl = $map['img_url'];
        }
        if(isset($map['product_order_id'])){
            $model->productOrderId = $map['product_order_id'];
        }
        if(isset($map['quantity'])){
            $model->quantity = $map['quantity'];
        }
        if(isset($map['size_id'])){
            $model->sizeId = $map['size_id'];
        }
        if(isset($map['size_name'])){
            $model->sizeName = $map['size_name'];
        }
        if(isset($map['gmt_planned_production_finished'])){
            $model->gmtPlannedProductionFinished = $map['gmt_planned_production_finished'];
        }
        if(isset($map['skip_customized'])){
            $model->skipCustomized = $map['skip_customized'];
        }
        if(isset($map['production_time'])){
            $model->productionTime = $map['production_time'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 局定需求id
     * @var string
     */
    public $bizIdCustomerOrder;

    /**
     * @description 2C订单下单时间
     * @var string
     */
    public $gmtOrderCreate;

    /**
     * @description 2C订单计划交期时间
     * @var string
     */
    public $gmtPlannedDelivery;

    /**
     * @description 图片链接
     * @var string
     */
    public $imgUrl;

    /**
     * @description 对应生产订单id
     * @var int
     */
    public $productOrderId;

    /**
     * @description 数量
     * @var int
     */
    public $quantity;

    /**
     * @description 尺码ID
     * @var int
     */
    public $sizeId;

    /**
     * @description 尺码名称
     * @var string
     */
    public $sizeName;

    /**
     * @description 2C订单制造域计划完成时间
     * @var string
     */
    public $gmtPlannedProductionFinished;

    /**
     * @description 是否跳过定制（印空花）
     * @var bool
     */
    public $skipCustomized;

    /**
     * @description 开始生产时间
     * @var string
     */
    public $productionTime;

    /**
     * @description 状态，WAIT_PRODUCTION - 待生产，PRODUCING - 生产中， CLOSED - 已关单， CANCELLED - 已取消
     * @var string
     */
    public $status;

}
