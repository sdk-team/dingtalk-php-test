<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_persistent_codeOapiSnsResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'persistentCode' => 'persistent_code',
        'openid' => 'openid',
        'unionid' => 'unionid',
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
        if (null !== $this->persistentCode) {
            $res['persistent_code'] = $this->persistentCode;
        }
        if (null !== $this->openid) {
            $res['openid'] = $this->openid;
        }
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_persistent_codeOapiSnsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['persistent_code'])){
            $model->persistentCode = $map['persistent_code'];
        }
        if(isset($map['openid'])){
            $model->openid = $map['openid'];
        }
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        return $model;
    }
    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description 用户给开放应用授权的持久授权码，此码目前无过期时间
     * @var string
     */
    public $persistentCode;

    /**
     * @description 用户在当前开放应用内的唯一标识
     * @var string
     */
    public $openid;

    /**
     * @description 用户在当前钉钉开放平台账号范围内的唯一标识，同一个钉钉开放平台账号可以包含多个开放应用，同时也包含ISV的套件应用及企业应用
     * @var string
     */
    public $unionid;

}
