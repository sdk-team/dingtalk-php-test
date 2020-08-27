<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetUseridByUnionidOapiUserParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetUseridByUnionidOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        return $model;
    }
    /**
     * @description 用户在当前钉钉开放平台账号范围内的唯一标识，同一个钉钉开放平台账号可以包含多个开放应用，同时也包含ISV的套件应用及企业应用
     * @var string
     */
    public $unionid;

}
