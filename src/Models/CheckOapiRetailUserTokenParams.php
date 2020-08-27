<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CheckOapiRetailUserTokenParams extends Model {
    protected $_name = [
        'channel' => 'channel',
        'token' => 'token',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CheckOapiRetailUserTokenParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['token'])){
            $model->token = $map['token'];
        }
        return $model;
    }
    /**
     * @description 业务身份
     * @var string
     */
    public $channel;

    /**
     * @description token信息
     * @var string
     */
    public $token;

}
