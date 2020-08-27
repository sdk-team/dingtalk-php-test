<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCspaceAuthResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'expireTime' => 'expire_time',
        'isvCode' => 'isv_code',
    ];
    public function validate() {
        Model::validatePattern('expireTime', $this->expireTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }
        if (null !== $this->isvCode) {
            $res['isv_code'] = $this->isvCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['expire_time'])){
            $model->expireTime = $map['expire_time'];
        }
        if(isset($map['isv_code'])){
            $model->isvCode = $map['isv_code'];
        }
        return $model;
    }
    /**
     * @description 授权码有效期，unix时间戳，单位ms
     * @var string
     */
    public $expireTime;

    /**
     * @description 授权码
     * @var string
     */
    public $isvCode;

}
