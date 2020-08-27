<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAppstoreInternalUnfinishedorderResponseBody\result;

use AlibabaCloud\Tea\Model;

class items extends Model {
    protected $_name = [
        'createTimestamp' => 'create_timestamp',
        'paidTimestamp' => 'paid_timestamp',
        'quantity' => 'quantity',
        'status' => 'status',
        'totalActualPayFee' => 'total_actual_pay_fee',
        'itemCode' => 'item_code',
        'corpId' => 'corp_id',
        'bizOrderId' => 'biz_order_id',
        'goodsCode' => 'goods_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['create_timestamp'] = $this->createTimestamp;
        }
        if (null !== $this->paidTimestamp) {
            $res['paid_timestamp'] = $this->paidTimestamp;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->totalActualPayFee) {
            $res['total_actual_pay_fee'] = $this->totalActualPayFee;
        }
        if (null !== $this->itemCode) {
            $res['item_code'] = $this->itemCode;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->bizOrderId) {
            $res['biz_order_id'] = $this->bizOrderId;
        }
        if (null !== $this->goodsCode) {
            $res['goods_code'] = $this->goodsCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['create_timestamp'])){
            $model->createTimestamp = $map['create_timestamp'];
        }
        if(isset($map['paid_timestamp'])){
            $model->paidTimestamp = $map['paid_timestamp'];
        }
        if(isset($map['quantity'])){
            $model->quantity = $map['quantity'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['total_actual_pay_fee'])){
            $model->totalActualPayFee = $map['total_actual_pay_fee'];
        }
        if(isset($map['item_code'])){
            $model->itemCode = $map['item_code'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['biz_order_id'])){
            $model->bizOrderId = $map['biz_order_id'];
        }
        if(isset($map['goods_code'])){
            $model->goodsCode = $map['goods_code'];
        }
        return $model;
    }
    /**
     * @description 订单创建时间戳
     * @var int
     */
    public $createTimestamp;

    /**
     * @description 订单支付时间戳
     * @var int
     */
    public $paidTimestamp;

    /**
     * @description 订购数量，周期型商品该字段为空
     * @var int
     */
    public $quantity;

    /**
     * @description 订单状态，3 - 已支付状态
     * @var int
     */
    public $status;

    /**
     * @description 实际支付总金额，CNY(分)
     * @var int
     */
    public $totalActualPayFee;

    /**
     * @description 内购商品规格码
     * @var string
     */
    public $itemCode;

    /**
     * @description 购买商品的企业开放Id
     * @var string
     */
    public $corpId;

    /**
     * @description 订单号
     * @var int
     */
    public $bizOrderId;

    /**
     * @description 商品码
     * @var string
     */
    public $goodsCode;

}
