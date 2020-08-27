<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class InfoOapiProcessinstanceCspaceParams extends Model {
    protected $_name = [
        'userId' => 'user_id',
        'agentId' => 'agent_id',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return InfoOapiProcessinstanceCspaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        return $model;
    }
    /**
     * @description 用户id
     * @var string
     */
    public $userId;

    /**
     * @description 企业应用标识(ISV调用必须设置)
     * @var int
     */
    public $agentId;

}
