<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_persistent_codeOapiSnsParams extends Model {
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
     * @return Get_persistent_codeOapiSnsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tmp_auth_code'])){
            $model->tmpAuthCode = $map['tmp_auth_code'];
        }
        return $model;
    }
    /**
     * @description 用户授权给钉钉开放应用的临时授权码
     * @var string
     */
    public $tmpAuthCode;

}
