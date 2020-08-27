<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CloseOapiCustomerserviceSessionParams\closeSession;

class CloseOapiCustomerserviceSessionParams extends Model {
    protected $_name = [
        'closeSession' => 'close_session',
    ];
    public function validate() {
        Model::validateRequired('closeSession', $this->closeSession, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->closeSession) {
            $res['close_session'] = null !== $this->closeSession ? $this->closeSession->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CloseOapiCustomerserviceSessionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['close_session'])){
            $model->closeSession = closeSession::fromMap($map['close_session']);
        }
        return $model;
    }
    /**
     * @description 关闭会话
     * @var closeSession
     */
    public $closeSession;

}
