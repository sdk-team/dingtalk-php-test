<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoOrderResponseBody\model;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'actualFinishTime' => 'actual_finish_time',
        'actualStartTime' => 'actual_start_time',
        'bizIdDtechCategory' => 'bizId_dtech_category',
        'bizIdDtechCategoryName' => 'bizId_dtech_category_name',
        'bizIdDtechPkg' => 'bizId_dtech_pkg',
        'colorId' => 'color_id',
        'colorName' => 'color_name',
        'id' => 'id',
        'planFinishTime' => 'plan_finish_time',
        'planStartTime' => 'plan_start_time',
        'status' => 'status',
        'styleCode' => 'style_code',
        'styleId' => 'style_id',
        'styleImg' => 'style_img',
        'styleName' => 'style_name',
        'tenantId' => 'tenant_id',
        'totalQuantity' => 'total_quantity',
        'goodsNo' => 'goods_no',
        'number' => 'number',
        'orderCreateTime' => 'order_create_time',
        'source' => 'source',
        'purchaseOrderId' => 'purchase_order_id',
    ];
    public function validate() {
        Model::validatePattern('actualFinishTime', $this->actualFinishTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('actualStartTime', $this->actualStartTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planFinishTime', $this->planFinishTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planStartTime', $this->planStartTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('orderCreateTime', $this->orderCreateTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->actualFinishTime) {
            $res['actual_finish_time'] = $this->actualFinishTime;
        }
        if (null !== $this->actualStartTime) {
            $res['actual_start_time'] = $this->actualStartTime;
        }
        if (null !== $this->bizIdDtechCategory) {
            $res['bizId_dtech_category'] = $this->bizIdDtechCategory;
        }
        if (null !== $this->bizIdDtechCategoryName) {
            $res['bizId_dtech_category_name'] = $this->bizIdDtechCategoryName;
        }
        if (null !== $this->bizIdDtechPkg) {
            $res['bizId_dtech_pkg'] = $this->bizIdDtechPkg;
        }
        if (null !== $this->colorId) {
            $res['color_id'] = $this->colorId;
        }
        if (null !== $this->colorName) {
            $res['color_name'] = $this->colorName;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->planFinishTime) {
            $res['plan_finish_time'] = $this->planFinishTime;
        }
        if (null !== $this->planStartTime) {
            $res['plan_start_time'] = $this->planStartTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->styleCode) {
            $res['style_code'] = $this->styleCode;
        }
        if (null !== $this->styleId) {
            $res['style_id'] = $this->styleId;
        }
        if (null !== $this->styleImg) {
            $res['style_img'] = $this->styleImg;
        }
        if (null !== $this->styleName) {
            $res['style_name'] = $this->styleName;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->totalQuantity) {
            $res['total_quantity'] = $this->totalQuantity;
        }
        if (null !== $this->goodsNo) {
            $res['goods_no'] = $this->goodsNo;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->orderCreateTime) {
            $res['order_create_time'] = $this->orderCreateTime;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->purchaseOrderId) {
            $res['purchase_order_id'] = $this->purchaseOrderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['actual_finish_time'])){
            $model->actualFinishTime = $map['actual_finish_time'];
        }
        if(isset($map['actual_start_time'])){
            $model->actualStartTime = $map['actual_start_time'];
        }
        if(isset($map['bizId_dtech_category'])){
            $model->bizIdDtechCategory = $map['bizId_dtech_category'];
        }
        if(isset($map['bizId_dtech_category_name'])){
            $model->bizIdDtechCategoryName = $map['bizId_dtech_category_name'];
        }
        if(isset($map['bizId_dtech_pkg'])){
            $model->bizIdDtechPkg = $map['bizId_dtech_pkg'];
        }
        if(isset($map['color_id'])){
            $model->colorId = $map['color_id'];
        }
        if(isset($map['color_name'])){
            $model->colorName = $map['color_name'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['plan_finish_time'])){
            $model->planFinishTime = $map['plan_finish_time'];
        }
        if(isset($map['plan_start_time'])){
            $model->planStartTime = $map['plan_start_time'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['style_code'])){
            $model->styleCode = $map['style_code'];
        }
        if(isset($map['style_id'])){
            $model->styleId = $map['style_id'];
        }
        if(isset($map['style_img'])){
            $model->styleImg = $map['style_img'];
        }
        if(isset($map['style_name'])){
            $model->styleName = $map['style_name'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['total_quantity'])){
            $model->totalQuantity = $map['total_quantity'];
        }
        if(isset($map['goods_no'])){
            $model->goodsNo = $map['goods_no'];
        }
        if(isset($map['number'])){
            $model->number = $map['number'];
        }
        if(isset($map['order_create_time'])){
            $model->orderCreateTime = $map['order_create_time'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        if(isset($map['purchase_order_id'])){
            $model->purchaseOrderId = $map['purchase_order_id'];
        }
        return $model;
    }
    /**
     * @description 实际完成时间
     * @var string
     */
    public $actualFinishTime;

    /**
     * @description 实际开始时间
     * @var string
     */
    public $actualStartTime;

    /**
     * @description 类别编号
     * @var string
     */
    public $bizIdDtechCategory;

    /**
     * @description 类别名称
     * @var string
     */
    public $bizIdDtechCategoryName;

    /**
     * @description 数字工艺包id
     * @var string
     */
    public $bizIdDtechPkg;

    /**
     * @description 颜色id
     * @var string
     */
    public $colorId;

    /**
     * @description 颜色名称
     * @var string
     */
    public $colorName;

    /**
     * @description 主键id
     * @var int
     */
    public $id;

    /**
     * @description 计划完成时间
     * @var string
     */
    public $planFinishTime;

    /**
     * @description 计划开始时间
     * @var string
     */
    public $planStartTime;

    /**
     * @description 生产订单状态
     * @var string
     */
    public $status;

    /**
     * @description 款号code
     * @var string
     */
    public $styleCode;

    /**
     * @description 款号id
     * @var int
     */
    public $styleId;

    /**
     * @description 款号图片连接
     * @var string
     */
    public $styleImg;

    /**
     * @description 款号名称
     * @var string
     */
    public $styleName;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description 订单数量
     * @var int
     */
    public $totalQuantity;

    /**
     * @description 商家货号
     * @var string
     */
    public $goodsNo;

    /**
     * @description 订单BP号
     * @var string
     */
    public $number;

    /**
     * @description 订单创建时间
     * @var string
     */
    public $orderCreateTime;

    /**
     * @description TRADE/DCC/TRAIN - 订单来源
     * @var string
     */
    public $source;

    /**
     * @description 采购订单id
     * @var string
     */
    public $purchaseOrderId;

}
