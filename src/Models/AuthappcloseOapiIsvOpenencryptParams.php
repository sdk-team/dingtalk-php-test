<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AuthappcloseOapiIsvOpenencryptParams\topAuthMicroAppClose;

class AuthappcloseOapiIsvOpenencryptParams extends Model {
    protected $_name = [
        'topAuthMicroAppClose' => 'top_auth_micro_app_close',
    ];
    public function validate() {
        Model::validateRequired('topAuthMicroAppClose', $this->topAuthMicroAppClose, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->topAuthMicroAppClose) {
            $res['top_auth_micro_app_close'] = null !== $this->topAuthMicroAppClose ? $this->topAuthMicroAppClose->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AuthappcloseOapiIsvOpenencryptParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['top_auth_micro_app_close'])){
            $model->topAuthMicroAppClose = topAuthMicroAppClose::fromMap($map['top_auth_micro_app_close']);
        }
        return $model;
    }
    /**
     * @description 请求参数
     * @var topAuthMicroAppClose
     */
    public $topAuthMicroAppClose;

}
