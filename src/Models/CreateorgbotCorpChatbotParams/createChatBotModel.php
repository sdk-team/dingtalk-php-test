<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateorgbotCorpChatbotParams;

use AlibabaCloud\Tea\Model;

class createChatBotModel extends Model {
    protected $_name = [
        'icon' => 'icon',
        'outgoingUrl' => 'outgoing_url',
        'botType' => 'bot_type',
        'description' => 'description',
        'name' => 'name',
        'type' => 'type',
        'outgoingToken' => 'outgoing_token',
        'microappAgentId' => 'microapp_agent_id',
        'breif' => 'breif',
        'corpId' => 'corp_id',
    ];
    public function validate() {
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('outgoingUrl', $this->outgoingUrl, true);
        Model::validateRequired('botType', $this->botType, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('outgoingToken', $this->outgoingToken, true);
        Model::validateRequired('microappAgentId', $this->microappAgentId, true);
        Model::validateRequired('breif', $this->breif, true);
        Model::validateRequired('corpId', $this->corpId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->outgoingUrl) {
            $res['outgoing_url'] = $this->outgoingUrl;
        }
        if (null !== $this->botType) {
            $res['bot_type'] = $this->botType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->outgoingToken) {
            $res['outgoing_token'] = $this->outgoingToken;
        }
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->breif) {
            $res['breif'] = $this->breif;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return createChatBotModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['outgoing_url'])){
            $model->outgoingUrl = $map['outgoing_url'];
        }
        if(isset($map['bot_type'])){
            $model->botType = $map['bot_type'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['outgoing_token'])){
            $model->outgoingToken = $map['outgoing_token'];
        }
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['breif'])){
            $model->breif = $map['breif'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        return $model;
    }
    /**
     * @description 机器人头像
     * @var string
     */
    public $icon;

    /**
     * @description 机器人回调URL
     * @var string
     */
    public $outgoingUrl;

    /**
     * @description 2-企业对内机器人，3-企业对外机器人
     * @var int
     */
    public $botType;

    /**
     * @description 机器人功能详细描述
     * @var string
     */
    public $description;

    /**
     * @description 机器人名字
     * @var string
     */
    public $name;

    /**
     * @description 机器人类型(钉钉分配)
     * @var string
     */
    public $type;

    /**
     * @description 机器人安全秘钥
     * @var string
     */
    public $outgoingToken;

    /**
     * @description 微应用id
     * @var int
     */
    public $microappAgentId;

    /**
     * @description 机器人简介
     * @var string
     */
    public $breif;

    /**
     * @description 开通机器人企业id
     * @var string
     */
    public $corpId;

}
