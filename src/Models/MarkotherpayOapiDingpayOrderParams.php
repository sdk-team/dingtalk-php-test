<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class MarkotherpayOapiDingpayOrderParams extends Model {
    protected $_name = [
        'applyPayOperatorUserid' => 'apply_pay_operator_userid',
        'orderNos' => 'order_nos',
        'extension' => 'extension',
        'payChannelPayerRealUid' => 'pay_channel_payer_real_uid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->applyPayOperatorUserid) {
            $res['apply_pay_operator_userid'] = $this->applyPayOperatorUserid;
        }
        if (null !== $this->orderNos) {
            $res['order_nos'] = $this->orderNos;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->payChannelPayerRealUid) {
            $res['pay_channel_payer_real_uid'] = $this->payChannelPayerRealUid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return MarkotherpayOapiDingpayOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['apply_pay_operator_userid'])){
            $model->applyPayOperatorUserid = $map['apply_pay_operator_userid'];
        }
        if(isset($map['order_nos'])){
            if(!empty($map['order_nos'])){
                $model->orderNos = $map['order_nos'];
            }
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['pay_channel_payer_real_uid'])){
            $model->payChannelPayerRealUid = $map['pay_channel_payer_real_uid'];
        }
        return $model;
    }
    /**
     * @description 标记支付的操作员userId
     * @var string
     */
    public $applyPayOperatorUserid;

    /**
     * @description 钉支付订单号
     * @var array
     */
    public $orderNos;

    /**
     * @description 扩展属性
     * @var string
     */
    public $extension;

    /**
     * @description 真实支付宝UID
     * @var string
     */
    public $payChannelPayerRealUid;

}
