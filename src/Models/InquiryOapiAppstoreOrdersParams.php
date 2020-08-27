<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class InquiryOapiAppstoreOrdersParams extends Model {
    protected $_name = [
        'corpid' => 'corpid',
        'mobile' => 'mobile',
        'goodsCode' => 'goods_code',
        'itemCode' => 'item_code',
        'cycNum' => 'cyc_num',
        'cycUnit' => 'cyc_unit',
        'quantity' => 'quantity',
    ];
    public function validate() {
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validateRequired('mobile', $this->mobile, true);
        Model::validateRequired('goodsCode', $this->goodsCode, true);
        Model::validateRequired('itemCode', $this->itemCode, true);
        Model::validateRequired('cycNum', $this->cycNum, true);
        Model::validateRequired('cycUnit', $this->cycUnit, true);
        Model::validateRequired('quantity', $this->quantity, true);
    }
    public function toMap() {
        $res = [];
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
        return $res;
    }
    /**
     * @param array $map
     * @return InquiryOapiAppstoreOrdersParams
     */
    public static function fromMap($map = []) {
        $model = new self();
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
        return $model;
    }
    /**
     * @description 询价企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 询价用户手机号
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
     * @var int
     */
    public $cycNum;

    /**
     * @description 订购周期单位
     * @var int
     */
    public $cycUnit;

    /**
     * @description 订购人数
     * @var int
     */
    public $quantity;

}
