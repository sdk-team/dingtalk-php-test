<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetuserinfoOapiUserParams extends Model {
    protected $_name = [
        'code' => 'code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetuserinfoOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        return $model;
    }
    /**
     * @description requestAuthCode接口中获取的CODE
     * @var string
     */
    public $code;

}
