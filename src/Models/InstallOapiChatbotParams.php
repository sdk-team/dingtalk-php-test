<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InstallOapiChatbotParams\chatbotVo;

class InstallOapiChatbotParams extends Model {
    protected $_name = [
        'chatbotVo' => 'chatbot_vo',
    ];
    public function validate() {
        Model::validateRequired('chatbotVo', $this->chatbotVo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatbotVo) {
            $res['chatbot_vo'] = null !== $this->chatbotVo ? $this->chatbotVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return InstallOapiChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatbot_vo'])){
            $model->chatbotVo = chatbotVo::fromMap($map['chatbot_vo']);
        }
        return $model;
    }
    /**
     * @description 安装的机器人信息
     * @var chatbotVo
     */
    public $chatbotVo;

}
