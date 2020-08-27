<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendOapiRobotIntelligentMessageParams extends Model {
    protected $_name = [
        'msgKey' => 'msg_key',
        'msgParam' => 'msg_param',
        'openConversationId' => 'open_conversation_id',
        'receiverUnionIds' => 'receiver_union_ids',
    ];
    public function validate() {
        Model::validateRequired('msgKey', $this->msgKey, true);
        Model::validateRequired('msgParam', $this->msgParam, true);
        Model::validateRequired('openConversationId', $this->openConversationId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->msgKey) {
            $res['msg_key'] = $this->msgKey;
        }
        if (null !== $this->msgParam) {
            $res['msg_param'] = $this->msgParam;
        }
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->receiverUnionIds) {
            $res['receiver_union_ids'] = $this->receiverUnionIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiRobotIntelligentMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msg_key'])){
            $model->msgKey = $map['msg_key'];
        }
        if(isset($map['msg_param'])){
            $model->msgParam = $map['msg_param'];
        }
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['receiver_union_ids'])){
            if(!empty($map['receiver_union_ids'])){
                $model->receiverUnionIds = $map['receiver_union_ids'];
            }
        }
        return $model;
    }
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
     * @description 开放的群ID
     * @var string
     */
    public $openConversationId;

    /**
     * @description 消息接收者的unionId列表，如果不传则表示群全员可见
     * @var array
     */
    public $receiverUnionIds;

}
