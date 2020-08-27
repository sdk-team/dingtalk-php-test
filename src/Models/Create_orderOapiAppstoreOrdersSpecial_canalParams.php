<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Create_orderOapiAppstoreOrdersSpecial_canalParams extends Model {
    protected $_name = [
        'orderCenterId' => 'order_center_id',
        'corpid' => 'corpid',
        'mobile' => 'mobile',
        'goodsCode' => 'goods_code',
        'itemCode' => 'item_code',
        'cycNum' => 'cyc_num',
        'cycUnit' => 'cyc_unit',
        'quantity' => 'quantity',
        'price' => 'price',
    ];
    public function validate() {
        Model::validateRequired('orderCenterId', $this->orderCenterId, true);
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validateRequired('mobile', $this->mobile, true);
        Model::validateRequired('goodsCode', $this->goodsCode, true);
        Model::validateRequired('itemCode', $this->itemCode, true);
        Model::validateRequired('cycNum', $this->cycNum, true);
        Model::validateRequired('cycUnit', $this->cycUnit, true);
        Model::validateRequired('quantity', $this->quantity, true);
        Model::validateRequired('price', $this->price, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderCenterId) {
            $res['order_center_id'] = $this->orderCenterId;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->goodsCode) {
            $res['goods_code'] = $this->goodsCode;
        }
        if (null !== $this->itemCode) {
            $res['item_code'] = $this->itemCode;
        }
        if (null !== $this->cycNum) {
            $res['cyc_num'] = $this->cycNum;
        }
        if (null !== $this->cycUnit) {
            $res['cyc_unit'] = $this->cycUnit;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Create_orderOapiAppstoreOrdersSpecial_canalParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_center_id'])){
            $model->orderCenterId = $map['order_center_id'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['goods_code'])){
            $model->goodsCode = $map['goods_code'];
        }
        if(isset($map['item_code'])){
            $model->itemCode = $map['item_code'];
        }
        if(isset($map['cyc_num'])){
            $model->cycNum = $map['cyc_num'];
        }
        if(isset($map['cyc_unit'])){
            $model->cycUnit = $map['cyc_unit'];
        }
        if(isset($map['quantity'])){
            $model->quantity = $map['quantity'];
        }
        if(isset($map['price'])){
            $model->price = $map['price'];
        }
        return $model;
    }
    /**
     * @description 联通订单id
     * @var string
     */
    public $orderCenterId;

    /**
     * @description 下单企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 下单人手机号
     * @var string
     */
    public $mobile;

    /**
     * @description 商品码
     * @var string
     */
    public $goodsCode;

    /**
     * @description 规格码
     * @var string
     */
    public $itemCode;

    /**
     * @description 订购周期数量
     * @var string
     */
    public $cycNum;

    /**
     * @description 订购的周期单位：1-年，2-月，3-日
     * @var string
     */
    public $cycUnit;

    /**
     * @description 订购数量
     * @var string
     */
    public $quantity;

    /**
     * @description 订购价格
     * @var string
     */
    public $price;

}
