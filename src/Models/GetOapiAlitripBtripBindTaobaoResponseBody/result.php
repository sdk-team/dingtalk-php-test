<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripBindTaobaoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'taobaoInfo' => 'taobao_info',
        'alipayInfo' => 'alipay_info',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->taobaoInfo) {
            $res['taobao_info'] = $this->taobaoInfo;
        }
        if (null !== $this->alipayInfo) {
            $res['alipay_info'] = $this->alipayInfo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['taobao_info'])){
            $model->taobaoInfo = $map['taobao_info'];
        }
        if(isset($map['alipay_info'])){
            $model->alipayInfo = $map['alipay_info'];
        }
        return $model;
    }
    /**
     * @description 淘宝帐号
     * @var string
     */
    public $taobaoInfo;

    /**
     * @description 关联的支付宝帐号
     * @var string
     */
    public $alipayInfo;

}
