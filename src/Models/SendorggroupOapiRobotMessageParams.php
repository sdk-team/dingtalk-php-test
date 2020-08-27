<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendorggroupOapiRobotMessageParams extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
        'chatbotId' => 'chatbot_id',
        'msgKey' => 'msg_key',
        'msgParam' => 'msg_param',
        'token' => 'token',
    ];
    public function validate() {
        Model::validateRequired('msgKey', $this->msgKey, true);
        Model::validateRequired('msgParam', $this->msgParam, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->msgKey) {
            $res['msg_key'] = $this->msgKey;
        }
        if (null !== $this->msgParam) {
            $res['msg_param'] = $this->msgParam;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendorggroupOapiRobotMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['msg_key'])){
            $model->msgKey = $map['msg_key'];
        }
        if(isset($map['msg_param'])){
            $model->msgParam = $map['msg_param'];
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
     * @description 申请到的消息模板唯一标识符
     * @var string
     */
    public $msgKey;

    /**
     * @description 消息模板中，变量本次替换的值
     * @var string
     */
    public $msgParam;

    /**
     * @description 机器人webhook中的access_token参数，与chatbot_id+open_conversation_id 只需要填1种
     * @var string
     */
    public $token;

}
