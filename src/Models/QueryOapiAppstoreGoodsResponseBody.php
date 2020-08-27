<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAppstoreGoodsResponseBody\goodsInfo;

class QueryOapiAppstoreGoodsResponseBody extends Model {
    protected $_name = [
        'goodsInfo' => 'goods_info',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->goodsInfo) {
            $res['goods_info'] = null !== $this->goodsInfo ? $this->goodsInfo->toMap() : null;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiAppstoreGoodsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['goods_info'])){
            $model->goodsInfo = goodsInfo::fromMap($map['goods_info']);
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 商品详情
     * @var goodsInfo
     */
    public $goodsInfo;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

}
