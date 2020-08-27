<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_sns_tokenOapiSnsResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'expiresIn' => 'expires_in',
        'snsToken' => 'sns_token',
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
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
        }
        if (null !== $this->snsToken) {
            $res['sns_token'] = $this->snsToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_sns_tokenOapiSnsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['expires_in'])){
            $model->expiresIn = $map['expires_in'];
        }
        if(isset($map['sns_token'])){
            $model->snsToken = $map['sns_token'];
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
     * @description sns_token的过期时间
     * @var int
     */
    public $expiresIn;

    /**
     * @description 用户授权的token
     * @var string
     */
    public $snsToken;

}
