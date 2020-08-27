<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiAppstoreGoodsParams extends Model {
    protected $_name = [
        'goodsCode' => 'goods_code',
    ];
    public function validate() {
        Model::validateRequired('goodsCode', $this->goodsCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->goodsCode) {
            $res['goods_code'] = $this->goodsCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiAppstoreGoodsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['goods_code'])){
            $model->goodsCode = $map['goods_code'];
        }
        return $model;
    }
    /**
     * @description 商品码
     * @var string
     */
    public $goodsCode;

}
