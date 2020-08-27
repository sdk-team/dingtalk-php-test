<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListorgbotCorpChatbotResponseBody\result;

use AlibabaCloud\Tea\Model;

class resultList extends Model {
    protected $_name = [
        'outgoingToken' => 'outgoing_token',
        'outgoingUrl' => 'outgoing_url',
        'description' => 'description',
        'breif' => 'breif',
        'icon' => 'icon',
        'name' => 'name',
        'type' => 'type',
        'botType' => 'bot_type',
        'corpId' => 'corp_id',
        'microappAgentId' => 'microapp_agent_id',
        'chatbotId' => 'chatbot_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->outgoingToken) {
            $res['outgoing_token'] = $this->outgoingToken;
        }
        if (null !== $this->outgoingUrl) {
            $res['outgoing_url'] = $this->outgoingUrl;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->breif) {
            $res['breif'] = $this->breif;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->botType) {
            $res['bot_type'] = $this->botType;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resultList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['outgoing_token'])){
            $model->outgoingToken = $map['outgoing_token'];
        }
        if(isset($map['outgoing_url'])){
            $model->outgoingUrl = $map['outgoing_url'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['breif'])){
            $model->breif = $map['breif'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['bot_type'])){
            $model->botType = $map['bot_type'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        return $model;
    }
    /**
     * @description 鉴权token
     * @var string
     */
    public $outgoingToken;

    /**
     * @description 回调的URL
     * @var string
     */
    public $outgoingUrl;

    /**
     * @description 机器人详细描述
     * @var string
     */
    public $description;

    /**
     * @description 机器人简介
     * @var string
     */
    public $breif;

    /**
     * @description 机器人头像
     * @var string
     */
    public $icon;

    /**
     * @description 机器人名字
     * @var string
     */
    public $name;

    /**
     * @description 钉钉分配的type
     * @var string
     */
    public $type;

    /**
     * @description 机器人类型
     * @var int
     */
    public $botType;

    /**
     * @description 企业corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 微应用Id
     * @var int
     */
    public $microappAgentId;

    /**
     * @description 机器人id
     * @var int
     */
    public $chatbotId;

}
