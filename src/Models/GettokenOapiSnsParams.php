<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GettokenOapiSnsParams extends Model {
    protected $_name = [
        'appid' => 'appid',
        'appsecret' => 'appsecret',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->appid) {
            $res['appid'] = $this->appid;
        }
        if (null !== $this->appsecret) {
            $res['appsecret'] = $this->appsecret;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GettokenOapiSnsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['appid'])){
            $model->appid = $map['appid'];
        }
        if(isset($map['appsecret'])){
            $model->appsecret = $map['appsecret'];
        }
        return $model;
    }
    /**
     * @description 由钉钉开放平台提供给开放应用的唯一标识
     * @var string
     */
    public $appid;

    /**
     * @description 由钉钉开放平台提供的密钥
     * @var string
     */
    public $appsecret;

}
