<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class PushOapiCateringOrderParams extends Model {
    protected $_name = [
        'orderDetails' => 'order_details',
        'feeOriginal' => 'fee_original',
        'feeAfterDiscount' => 'fee_after_discount',
        'orderId' => 'order_id',
        'shopName' => 'shop_name',
        'shopId' => 'shop_id',
        'feeActuallyPay' => 'fee_actually_pay',
        'paymentTime' => 'payment_time',
        'feeShouldPay' => 'fee_should_pay',
        'ordererUserId' => 'orderer_user_id',
    ];
    public function validate() {
        Model::validatePattern('paymentTime', $this->paymentTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderDetails) {
            $res['order_details'] = $this->orderDetails;
        }
        if (null !== $this->feeOriginal) {
            $res['fee_original'] = $this->feeOriginal;
        }
        if (null !== $this->feeAfterDiscount) {
            $res['fee_after_discount'] = $this->feeAfterDiscount;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->shopName) {
            $res['shop_name'] = $this->shopName;
        }
        if (null !== $this->shopId) {
            $res['shop_id'] = $this->shopId;
        }
        if (null !== $this->feeActuallyPay) {
            $res['fee_actually_pay'] = $this->feeActuallyPay;
        }
        if (null !== $this->paymentTime) {
            $res['payment_time'] = $this->paymentTime;
        }
        if (null !== $this->feeShouldPay) {
            $res['fee_should_pay'] = $this->feeShouldPay;
        }
        if (null !== $this->ordererUserId) {
            $res['orderer_user_id'] = $this->ordererUserId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PushOapiCateringOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_details'])){
            $model->orderDetails = $map['order_details'];
        }
        if(isset($map['fee_original'])){
            $model->feeOriginal = $map['fee_original'];
        }
        if(isset($map['fee_after_discount'])){
            $model->feeAfterDiscount = $map['fee_after_discount'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['shop_name'])){
            $model->shopName = $map['shop_name'];
        }
        if(isset($map['shop_id'])){
            $model->shopId = $map['shop_id'];
        }
        if(isset($map['fee_actually_pay'])){
            $model->feeActuallyPay = $map['fee_actually_pay'];
        }
        if(isset($map['payment_time'])){
            $model->paymentTime = $map['payment_time'];
        }
        if(isset($map['fee_should_pay'])){
            $model->feeShouldPay = $map['fee_should_pay'];
        }
        if(isset($map['orderer_user_id'])){
            $model->ordererUserId = $map['orderer_user_id'];
        }
        return $model;
    }
    /**
     * @description 订单详情
     * @var string
     */
    public $orderDetails;

    /**
     * @description 原始费用(分)
     * @var int
     */
    public $feeOriginal;

    /**
     * @description 折后费用(分)
     * @var int
     */
    public $feeAfterDiscount;

    /**
     * @description 订单id
     * @var string
     */
    public $orderId;

    /**
     * @description 店铺名称
     * @var string
     */
    public $shopName;

    /**
     * @description 店铺id
     * @var string
     */
    public $shopId;

    /**
     * @description 实收总额(分)
     * @var int
     */
    public $feeActuallyPay;

    /**
     * @description 订单支付时间
     * @var string
     */
    public $paymentTime;

    /**
     * @description 应付总额(分)
     * @var int
     */
    public $feeShouldPay;

    /**
     * @description 下单人的userId
     * @var string
     */
    public $ordererUserId;

}
