<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ConsumeOapiAppstoreInternalOrderParams extends Model {
    protected $_name = [
        'bizOrderId' => 'biz_order_id',
        'requestId' => 'request_id',
        'quantity' => 'quantity',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('bizOrderId', $this->bizOrderId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('quantity', $this->quantity, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizOrderId) {
            $res['biz_order_id'] = $this->bizOrderId;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ConsumeOapiAppstoreInternalOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_order_id'])){
            $model->bizOrderId = $map['biz_order_id'];
        }
        if(isset($map['request_id'])){
            $model->requestId = $map['request_id'];
        }
        if(isset($map['quantity'])){
            $model->quantity = $map['quantity'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 内购商品订单号
     * @var int
     */
    public $bizOrderId;

    /**
     * @description 核销请求Id，由ISV生成，用于请求幂等
     * @var string
     */
    public $requestId;

    /**
     * @description 订购商品核销数量
     * @var int
     */
    public $quantity;

    /**
     * @description 员工在当前企业内的唯一标识，也称staffId
     * @var string
     */
    public $userid;

}
