<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetlogintokenOapiImpaasUserResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'expire' => 'expire',
        'loginToken' => 'login_token',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
        }
        if (null !== $this->loginToken) {
            $res['login_token'] = $this->loginToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['expire'])){
            $model->expire = $map['expire'];
        }
        if(isset($map['login_token'])){
            $model->loginToken = $map['login_token'];
        }
        return $model;
    }
    /**
     * @description expire
     * @var int
     */
    public $expire;

    /**
     * @description loginToken
     * @var string
     */
    public $loginToken;

}
