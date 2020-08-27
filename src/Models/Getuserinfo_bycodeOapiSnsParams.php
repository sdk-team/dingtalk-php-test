<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Getuserinfo_bycodeOapiSnsParams extends Model {
    protected $_name = [
        'tmpAuthCode' => 'tmp_auth_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->tmpAuthCode) {
            $res['tmp_auth_code'] = $this->tmpAuthCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Getuserinfo_bycodeOapiSnsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tmp_auth_code'])){
            $model->tmpAuthCode = $map['tmp_auth_code'];
        }
        return $model;
    }
    /**
     * @description 登录的临时授权码
     * @var string
     */
    public $tmpAuthCode;

}
