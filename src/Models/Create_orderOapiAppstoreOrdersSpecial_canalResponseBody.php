<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Create_orderOapiAppstoreOrdersSpecial_canalResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'dingOrderId' => 'ding_order_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->dingOrderId) {
            $res['ding_order_id'] = $this->dingOrderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Create_orderOapiAppstoreOrdersSpecial_canalResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['ding_order_id'])){
            $model->dingOrderId = $map['ding_order_id'];
        }
        return $model;
    }
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

    /**
     * @description 钉钉订单id
     * @var string
     */
    public $dingOrderId;

}
