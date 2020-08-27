<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GettokenOapiSnsResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'accessToken' => 'access_token',
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
        if (null !== $this->accessToken) {
            $res['access_token'] = $this->accessToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GettokenOapiSnsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['access_token'])){
            $model->accessToken = $map['access_token'];
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
     * @description token的值
     * @var string
     */
    public $accessToken;

}
