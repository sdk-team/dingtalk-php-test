<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GenerateOapiRetailUserTokenResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'token' => 'token',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        return $model;
    }
    /**
     * @description token
     * @var string
     */
    public $token;

}
