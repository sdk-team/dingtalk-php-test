<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiAppstoreInternalOrderParams extends Model {
    protected $_name = [
        'bizOrderId' => 'biz_order_id',
    ];
    public function validate() {
        Model::validateRequired('bizOrderId', $this->bizOrderId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizOrderId) {
            $res['biz_order_id'] = $this->bizOrderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiAppstoreInternalOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_order_id'])){
            $model->bizOrderId = $map['biz_order_id'];
        }
        return $model;
    }
    /**
     * @description 内购商品订单号
     * @var int
     */
    public $bizOrderId;

}
