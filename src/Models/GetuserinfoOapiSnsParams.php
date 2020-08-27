<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetuserinfoOapiSnsParams extends Model {
    protected $_name = [
        'snsToken' => 'sns_token',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->snsToken) {
            $res['sns_token'] = $this->snsToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetuserinfoOapiSnsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sns_token'])){
            $model->snsToken = $map['sns_token'];
        }
        return $model;
    }
    /**
     * @description 用户授权给开放应用的token
     * @var string
     */
    public $snsToken;

}
