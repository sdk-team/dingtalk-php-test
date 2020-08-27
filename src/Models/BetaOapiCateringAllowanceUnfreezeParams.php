<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BetaOapiCateringAllowanceUnfreezeParams extends Model {
    protected $_name = [
        'ruleCode' => 'rule_code',
        'orderId' => 'order_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('ruleCode', $this->ruleCode, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->ruleCode) {
            $res['rule_code'] = $this->ruleCode;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BetaOapiCateringAllowanceUnfreezeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['rule_code'])){
            $model->ruleCode = $map['rule_code'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 餐补规则编码
     * @var string
     */
    public $ruleCode;

    /**
     * @description 订单编号
     * @var string
     */
    public $orderId;

    /**
     * @description 点餐人userid
     * @var string
     */
    public $userid;

}
