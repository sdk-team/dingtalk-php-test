<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetuserinfoOapiSsoParams extends Model {
    protected $_name = [
        'code' => 'code',
        'accessToken' => 'access_token',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->accessToken) {
            $res['access_token'] = $this->accessToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetuserinfoOapiSsoParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['access_token'])){
            $model->accessToken = $map['access_token'];
        }
        return $model;
    }
    /**
     * @description 再次强调，此token不同于一般的accesstoken，需要调用获取微应用管理员免登需要的AccessToken
     * @var string
     */
    public $code;

    /**
     * @description 通过Oauth认证给URL带上的CODE
     * @var string
     */
    public $accessToken;

}
