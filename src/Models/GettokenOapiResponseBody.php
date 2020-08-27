<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GettokenOapiResponseBody extends Model {
    protected $_name = [
        'accessToken' => 'access_token',
        'expiresIn' => 'expires_in',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->accessToken) {
            $res['access_token'] = $this->accessToken;
        }
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
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
     * @return GettokenOapiResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['access_token'])){
            $model->accessToken = $map['access_token'];
        }
        if(isset($map['expires_in'])){
            $model->expiresIn = $map['expires_in'];
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
     * @description access_token
     * @var string
     */
    public $accessToken;

    /**
     * @description expires_in
     * @var int
     */
    public $expiresIn;

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
