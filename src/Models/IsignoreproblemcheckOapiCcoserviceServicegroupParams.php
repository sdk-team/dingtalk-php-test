<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class IsignoreproblemcheckOapiCcoserviceServicegroupParams extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
        'dingtalkId' => 'dingtalk_id',
    ];
    public function validate() {
        Model::validateRequired('openConversationId', $this->openConversationId, true);
        Model::validateRequired('dingtalkId', $this->dingtalkId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->dingtalkId) {
            $res['dingtalk_id'] = $this->dingtalkId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return IsignoreproblemcheckOapiCcoserviceServicegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['dingtalk_id'])){
            $model->dingtalkId = $map['dingtalk_id'];
        }
        return $model;
    }
    /**
     * @description 群id
     * @var string
     */
    public $openConversationId;

    /**
     * @description 用户dingtalk加密id
     * @var string
     */
    public $dingtalkId;

}
