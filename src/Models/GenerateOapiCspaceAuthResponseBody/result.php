<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GenerateOapiCspaceAuthResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'isvCode' => 'isv_code',
        'expireTime' => 'expire_time',
    ];
    public function validate() {
        Model::validatePattern('expireTime', $this->expireTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->isvCode) {
            $res['isv_code'] = $this->isvCode;
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
        if(isset($map['isv_code'])){
            $model->isvCode = $map['isv_code'];
        }
        if(isset($map['expire_time'])){
            $model->expireTime = $map['expire_time'];
        }
        return $model;
    }
    /**
     * @description isv访问授权码
     * @var string
     */
    public $isvCode;

    /**
     * @description 授权码有效期，unix时间戳，单位ms
     * @var string
     */
    public $expireTime;

}
