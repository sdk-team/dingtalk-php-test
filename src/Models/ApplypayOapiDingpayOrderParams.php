<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ApplypayOapiDingpayOrderParams extends Model {
    protected $_name = [
        'applyPayOperatorUserid' => 'apply_pay_operator_userid',
        'orderNos' => 'order_nos',
        'payChannel' => 'pay_channel',
        'payChannelPayerRealUid' => 'pay_channel_payer_real_uid',
        'extension' => 'extension',
    ];
    public function validate() {
        Model::validateRequired('applyPayOperatorUserid', $this->applyPayOperatorUserid, true);
        Model::validateRequired('orderNos', $this->orderNos, true);
        Model::validateRequired('payChannel', $this->payChannel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->applyPayOperatorUserid) {
            $res['apply_pay_operator_userid'] = $this->applyPayOperatorUserid;
        }
        if (null !== $this->orderNos) {
            $res['order_nos'] = $this->orderNos;
        }
        if (null !== $this->payChannel) {
            $res['pay_channel'] = $this->payChannel;
        }
        if (null !== $this->payChannelPayerRealUid) {
            $res['pay_channel_payer_real_uid'] = $this->payChannelPayerRealUid;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ApplypayOapiDingpayOrderParams
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
        if(isset($map['pay_channel'])){
            $model->payChannel = $map['pay_channel'];
        }
        if(isset($map['pay_channel_payer_real_uid'])){
            $model->payChannelPayerRealUid = $map['pay_channel_payer_real_uid'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        return $model;
    }
    /**
     * @description 发起支付操作员userId
     * @var string
     */
    public $applyPayOperatorUserid;

    /**
     * @description 订单号
     * @var array
     */
    public $orderNos;

    /**
     * @description 支付渠道
     * @var string
     */
    public $payChannel;

    /**
     * @description 支付渠道方付款者真实出资UID
     * @var string
     */
    public $payChannelPayerRealUid;

    /**
     * @description 扩展属性
     * @var string
     */
    public $extension;

}
