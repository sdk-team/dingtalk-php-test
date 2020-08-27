<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiAppstoreInternalSkupageParams extends Model {
    protected $_name = [
        'goodsCode' => 'goods_code',
        'itemCode' => 'item_code',
        'callbackPage' => 'callback_page',
        'extendParam' => 'extend_param',
    ];
    public function validate() {
        Model::validateRequired('goodsCode', $this->goodsCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->goodsCode) {
            $res['goods_code'] = $this->goodsCode;
        }
        if (null !== $this->itemCode) {
            $res['item_code'] = $this->itemCode;
        }
        if (null !== $this->callbackPage) {
            $res['callback_page'] = $this->callbackPage;
        }
        if (null !== $this->extendParam) {
            $res['extend_param'] = $this->extendParam;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiAppstoreInternalSkupageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['goods_code'])){
            $model->goodsCode = $map['goods_code'];
        }
        if(isset($map['item_code'])){
            $model->itemCode = $map['item_code'];
        }
        if(isset($map['callback_page'])){
            $model->callbackPage = $map['callback_page'];
        }
        if(isset($map['extend_param'])){
            $model->extendParam = $map['extend_param'];
        }
        return $model;
    }
    /**
     * @description 内购商品码
     * @var string
     */
    public $goodsCode;

    /**
     * @description 内购商品规格码，如果设置了规格码，页面会默认选中该规格码
     * @var string
     */
    public $itemCode;

    /**
     * @description 回调页面(进行URLEncode处理)，微应用为页面URL，E应用为页面路径地址
     * @var string
     */
    public $callbackPage;

    /**
     * @description 与callbackPage配合使用。当用户从SKU页面下单并支付成功后，会跳转回ISV页面，此时将此参数原样回传。主要用于用户页面引导等操作，不能作为权益开通凭证。
     * @var string
     */
    public $extendParam;

}
