<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiServiceaccountResponseBody\serviceAccount;

class GetOapiServiceaccountResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'serviceAccount' => 'service_account',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->serviceAccount) {
            $res['service_account'] = null !== $this->serviceAccount ? $this->serviceAccount->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiServiceaccountResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['service_account'])){
            $model->serviceAccount = serviceAccount::fromMap($map['service_account']);
        }
        return $model;
    }
    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 服务号详情
     * @var serviceAccount
     */
    public $serviceAccount;

}
