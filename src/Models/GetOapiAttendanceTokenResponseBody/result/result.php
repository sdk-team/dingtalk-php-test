<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceTokenResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'token' => 'token',
        'expireTime' => 'expire_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['token'])){
            $model->token = $map['token'];
        }
        if(isset($map['expire_time'])){
            $model->expireTime = $map['expire_time'];
        }
        return $model;
    }
    /**
     * @description 授权码
     * @var string
     */
    public $token;

    /**
     * @description 授权超时时间
     * @var int
     */
    public $expireTime;

}
