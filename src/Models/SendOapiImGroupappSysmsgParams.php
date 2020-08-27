<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendOapiImGroupappSysmsgParams extends Model {
    protected $_name = [
        'msgKey' => 'msg_key',
        'msgParam' => 'msg_param',
        'openConversationId' => 'open_conversation_id',
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
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiImGroupappSysmsgParams
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

}
