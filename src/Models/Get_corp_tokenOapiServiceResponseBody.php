<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_corp_tokenOapiServiceResponseBody extends Model {
    protected $_name = [
        'expiresIn' => 'expires_in',
        'accessToken' => 'access_token',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
        }
        if (null !== $this->accessToken) {
            $res['access_token'] = $this->accessToken;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_corp_tokenOapiServiceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['expires_in'])){
            $model->expiresIn = $map['expires_in'];
        }
        if(isset($map['access_token'])){
            $model->accessToken = $map['access_token'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 授权方（企业）corp_access_token超时时间
     * @var int
     */
    public $expiresIn;

    /**
     * @description 授权方（企业）corp_access_token
     * @var string
     */
    public $accessToken;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

}
