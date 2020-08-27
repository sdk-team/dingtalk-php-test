<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiRobotMessageOrggrouptaskParams extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
        'chatbotId' => 'chatbot_id',
        'processQueryKey' => 'process_query_key',
        'token' => 'token',
    ];
    public function validate() {
        Model::validateRequired('processQueryKey', $this->processQueryKey, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->processQueryKey) {
            $res['process_query_key'] = $this->processQueryKey;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRobotMessageOrggrouptaskParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['process_query_key'])){
            $model->processQueryKey = $map['process_query_key'];
        }
        if(isset($map['token'])){
            $model->token = $map['token'];
        }
        return $model;
    }
    /**
     * @description 开放的群ID
     * @var string
     */
    public $openConversationId;

    /**
     * @description 申请到的企业机器人唯一标识符
     * @var string
     */
    public $chatbotId;

    /**
     * @description 用于查询发送进度的唯一标识
     * @var string
     */
    public $processQueryKey;

    /**
     * @description 机器人webhook中的access_token参数，与chatbot_id+open_conversation_id 只需要填1种
     * @var string
     */
    public $token;

}
