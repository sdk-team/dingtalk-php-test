<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceSessionParams\createSession;

class CreateOapiCustomerserviceSessionParams extends Model {
    protected $_name = [
        'createSession' => 'create_session',
    ];
    public function validate() {
        Model::validateRequired('createSession', $this->createSession, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->createSession) {
            $res['create_session'] = null !== $this->createSession ? $this->createSession->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiCustomerserviceSessionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['create_session'])){
            $model->createSession = createSession::fromMap($map['create_session']);
        }
        return $model;
    }
    /**
     * @description 新建会话参数
     * @var createSession
     */
    public $createSession;

}
