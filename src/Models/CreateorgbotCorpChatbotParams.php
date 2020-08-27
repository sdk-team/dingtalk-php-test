<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateorgbotCorpChatbotParams\createChatBotModel;

class CreateorgbotCorpChatbotParams extends Model {
    protected $_name = [
        'createChatBotModel' => 'create_chat_bot_model',
    ];
    public function validate() {
        Model::validateRequired('createChatBotModel', $this->createChatBotModel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->createChatBotModel) {
            $res['create_chat_bot_model'] = null !== $this->createChatBotModel ? $this->createChatBotModel->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateorgbotCorpChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['create_chat_bot_model'])){
            $model->createChatBotModel = createChatBotModel::fromMap($map['create_chat_bot_model']);
        }
        return $model;
    }
    /**
     * @description 创建机器人modle
     * @var createChatBotModel
     */
    public $createChatBotModel;

}
