<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_sns_tokenOapiSnsParams extends Model {
    protected $_name = [
        'persistentCode' => 'persistent_code',
        'openid' => 'openid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->persistentCode) {
            $res['persistent_code'] = $this->persistentCode;
        }
        if (null !== $this->openid) {
            $res['openid'] = $this->openid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_sns_tokenOapiSnsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['persistent_code'])){
            $model->persistentCode = $map['persistent_code'];
        }
        if(isset($map['openid'])){
            $model->openid = $map['openid'];
        }
        return $model;
    }
    /**
     * @description 用户授权给钉钉开放应用的持久授权码
     * @var string
     */
    public $persistentCode;

    /**
     * @description 用户的openid
     * @var string
     */
    public $openid;

}
