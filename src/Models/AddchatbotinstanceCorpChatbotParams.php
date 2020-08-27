<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddchatbotinstanceCorpChatbotParams extends Model {
    protected $_name = [
        'chatbotId' => 'chatbot_id',
        'openConversationId' => 'open_conversation_id',
        'name' => 'name',
        'iconMediaId' => 'icon_media_id',
    ];
    public function validate() {
        Model::validateRequired('chatbotId', $this->chatbotId, true);
        Model::validateRequired('openConversationId', $this->openConversationId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->iconMediaId) {
            $res['icon_media_id'] = $this->iconMediaId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddchatbotinstanceCorpChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['icon_media_id'])){
            $model->iconMediaId = $map['icon_media_id'];
        }
        return $model;
    }
    /**
     * @description 机器人id，由钉钉事先分配
     * @var string
     */
    public $chatbotId;

    /**
     * @description 创建群时返回的openConvsationId
     * @var string
     */
    public $openConversationId;

    /**
     * @description 机器人名字(如果为空，默认是机器人安装时的名字)
     * @var string
     */
    public $name;

    /**
     * @description 机器人头像(如果为空，默认是机器人安装时的头像)
     * @var string
     */
    public $iconMediaId;

}
