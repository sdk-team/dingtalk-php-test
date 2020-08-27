<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class PushOapiCateringAllowanceOrderParams extends Model {
    protected $_name = [
        'orderDetails' => 'order_details',
        'orderId' => 'order_id',
        'allowanceAmount' => 'allowance_amount',
        'mealPlanNo' => 'meal_plan_no',
        'actualAmount' => 'actual_amount',
        'shopName' => 'shop_name',
        'shopId' => 'shop_id',
        'orderFullAmount' => 'order_full_amount',
        'userName' => 'user_name',
        'userid' => 'userid',
        'orderTime' => 'order_time',
        'ext' => 'ext',
        'mealTime' => 'meal_time',
    ];
    public function validate() {
        Model::validateRequired('orderDetails', $this->orderDetails, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('allowanceAmount', $this->allowanceAmount, true);
        Model::validateRequired('mealPlanNo', $this->mealPlanNo, true);
        Model::validateRequired('actualAmount', $this->actualAmount, true);
        Model::validateRequired('shopId', $this->shopId, true);
        Model::validateRequired('orderFullAmount', $this->orderFullAmount, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderDetails) {
            $res['order_details'] = $this->orderDetails;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->allowanceAmount) {
            $res['allowance_amount'] = $this->allowanceAmount;
        }
        if (null !== $this->mealPlanNo) {
            $res['meal_plan_no'] = $this->mealPlanNo;
        }
        if (null !== $this->actualAmount) {
            $res['actual_amount'] = $this->actualAmount;
        }
        if (null !== $this->shopName) {
            $res['shop_name'] = $this->shopName;
        }
        if (null !== $this->shopId) {
            $res['shop_id'] = $this->shopId;
        }
        if (null !== $this->orderFullAmount) {
            $res['order_full_amount'] = $this->orderFullAmount;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->orderTime) {
            $res['order_time'] = $this->orderTime;
        }
        if (null !== $this->ext) {
            $res['ext'] = $this->ext;
        }
        if (null !== $this->mealTime) {
            $res['meal_time'] = $this->mealTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PushOapiCateringAllowanceOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_details'])){
            $model->orderDetails = $map['order_details'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['allowance_amount'])){
            $model->allowanceAmount = $map['allowance_amount'];
        }
        if(isset($map['meal_plan_no'])){
            $model->mealPlanNo = $map['meal_plan_no'];
        }
        if(isset($map['actual_amount'])){
            $model->actualAmount = $map['actual_amount'];
        }
        if(isset($map['shop_name'])){
            $model->shopName = $map['shop_name'];
        }
        if(isset($map['shop_id'])){
            $model->shopId = $map['shop_id'];
        }
        if(isset($map['order_full_amount'])){
            $model->orderFullAmount = $map['order_full_amount'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['order_time'])){
            $model->orderTime = $map['order_time'];
        }
        if(isset($map['ext'])){
            $model->ext = $map['ext'];
        }
        if(isset($map['meal_time'])){
            $model->mealTime = $map['meal_time'];
        }
        return $model;
    }
    /**
     * @description 菜品信息
     * @var string
     */
    public $orderDetails;

    /**
     * @description 订单id
     * @var string
     */
    public $orderId;

    /**
     * @description 补贴金额
     * @var int
     */
    public $allowanceAmount;

    /**
     * @description 餐补规则编码
     * @var string
     */
    public $mealPlanNo;

    /**
     * @description 实际支付金额
     * @var int
     */
    public $actualAmount;

    /**
     * @description 点餐商家名称
     * @var string
     */
    public $shopName;

    /**
     * @description 点餐商户编号
     * @var string
     */
    public $shopId;

    /**
     * @description 应付金额
     * @var int
     */
    public $orderFullAmount;

    /**
     * @description 点餐人姓名
     * @var string
     */
    public $userName;

    /**
     * @description 点餐人的编码，通过开放平台获取的 userId
     * @var string
     */
    public $userid;

    /**
     * @description 点餐时间
     * @var int
     */
    public $orderTime;

    /**
     * @description 补充信息
     * @var string
     */
    public $ext;

    /**
     * @description 用餐时间
     * @var int
     */
    public $mealTime;

}
