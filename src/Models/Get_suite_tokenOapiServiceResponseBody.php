<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_suite_tokenOapiServiceResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'suiteAccessToken' => 'suite_access_token',
        'expiresIn' => 'expires_in',
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
        if (null !== $this->suiteAccessToken) {
            $res['suite_access_token'] = $this->suiteAccessToken;
        }
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_suite_tokenOapiServiceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['suite_access_token'])){
            $model->suiteAccessToken = $map['suite_access_token'];
        }
        if(isset($map['expires_in'])){
            $model->expiresIn = $map['expires_in'];
        }
        return $model;
    }
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

    /**
     * @description 应用套件access_token
     * @var string
     */
    public $suiteAccessToken;

    /**
     * @description 有效期7200秒，过期之前要主动更新（建议ISV服务端做定时器主动更新，而不是依赖钉钉的定时推送）
     * @var int
     */
    public $expiresIn;

}
