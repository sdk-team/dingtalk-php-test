<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateorgbotCorpChatbotParams extends Model {
    protected $_name = [
        'icon' => 'icon',
        'name' => 'name',
        'chatbotId' => 'chatbot_id',
    ];
    public function validate() {
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('chatbotId', $this->chatbotId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateorgbotCorpChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        return $model;
    }
    /**
     * @description 头像的mediaId
     * @var string
     */
    public $icon;

    /**
     * @description 机器人名字
     * @var string
     */
    public $name;

    /**
     * @description 创建时返回的机器人Id
     * @var int
     */
    public $chatbotId;

}
