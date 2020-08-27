<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InstallOapiChatbotParams;

use AlibabaCloud\Tea\Model;

class chatbotVo extends Model {
    protected $_name = [
        'icon' => 'icon',
        'nameModify' => 'name_modify',
        'chatbotId' => 'chatbot_id',
        'breif' => 'breif',
        'function' => 'function',
        'outgoingUrl' => 'outgoing_url',
        'authority' => 'authority',
        'previewMediaId' => 'preview_media_id',
        'botType' => 'bot_type',
        'mobileSwitch' => 'mobile_switch',
        'description' => 'description',
        'name' => 'name',
        'iconMdify' => 'icon_mdify',
        'outgoingToken' => 'outgoing_token',
        'otoSupport' => 'oto_support',
    ];
    public function validate() {
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('nameModify', $this->nameModify, true);
        Model::validateRequired('chatbotId', $this->chatbotId, true);
        Model::validateRequired('breif', $this->breif, true);
        Model::validateRequired('function', $this->function, true);
        Model::validateRequired('outgoingUrl', $this->outgoingUrl, true);
        Model::validateRequired('authority', $this->authority, true);
        Model::validateRequired('previewMediaId', $this->previewMediaId, true);
        Model::validateRequired('botType', $this->botType, true);
        Model::validateRequired('mobileSwitch', $this->mobileSwitch, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('iconMdify', $this->iconMdify, true);
        Model::validateRequired('outgoingToken', $this->outgoingToken, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->nameModify) {
            $res['name_modify'] = $this->nameModify;
        }
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->breif) {
            $res['breif'] = $this->breif;
        }
        if (null !== $this->function) {
            $res['function'] = $this->function;
        }
        if (null !== $this->outgoingUrl) {
            $res['outgoing_url'] = $this->outgoingUrl;
        }
        if (null !== $this->authority) {
            $res['authority'] = $this->authority;
        }
        if (null !== $this->previewMediaId) {
            $res['preview_media_id'] = $this->previewMediaId;
        }
        if (null !== $this->botType) {
            $res['bot_type'] = $this->botType;
        }
        if (null !== $this->mobileSwitch) {
            $res['mobile_switch'] = $this->mobileSwitch;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->iconMdify) {
            $res['icon_mdify'] = $this->iconMdify;
        }
        if (null !== $this->outgoingToken) {
            $res['outgoing_token'] = $this->outgoingToken;
        }
        if (null !== $this->otoSupport) {
            $res['oto_support'] = $this->otoSupport;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return chatbotVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['name_modify'])){
            $model->nameModify = $map['name_modify'];
        }
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['breif'])){
            $model->breif = $map['breif'];
        }
        if(isset($map['function'])){
            $model->function = $map['function'];
        }
        if(isset($map['outgoing_url'])){
            $model->outgoingUrl = $map['outgoing_url'];
        }
        if(isset($map['authority'])){
            $model->authority = $map['authority'];
        }
        if(isset($map['preview_media_id'])){
            $model->previewMediaId = $map['preview_media_id'];
        }
        if(isset($map['bot_type'])){
            $model->botType = $map['bot_type'];
        }
        if(isset($map['mobile_switch'])){
            $model->mobileSwitch = $map['mobile_switch'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['icon_mdify'])){
            $model->iconMdify = $map['icon_mdify'];
        }
        if(isset($map['outgoing_token'])){
            $model->outgoingToken = $map['outgoing_token'];
        }
        if(isset($map['oto_support'])){
            $model->otoSupport = $map['oto_support'];
        }
        return $model;
    }
    /**
     * @description 机器人头像mediaId
     * @var string
     */
    public $icon;

    /**
     * @description 向群添加机器人时是否可改名字：0-不可必，1-可改
     * @var int
     */
    public $nameModify;

    /**
     * @description 机器人id(钉钉分配)
     * @var string
     */
    public $chatbotId;

    /**
     * @description 机器人简介
     * @var string
     */
    public $breif;

    /**
     * @description INCOMING = 1,OUTGOING  = 2,INOUT     = 3
     * @var int
     */
    public $function;

    /**
     * @description 机器人回调URL
     * @var string
     */
    public $outgoingUrl;

    /**
     * @description 0-正常，1-只服务端可管理
     * @var int
     */
    public $authority;

    /**
     * @description 机器人预览图
     * @var string
     */
    public $previewMediaId;

    /**
     * @description 2-企业对内机器人，3-企业对外机器人
     * @var int
     */
    public $botType;

    /**
     * @description 手机端是否能添加机器人：0-移动端不能加，1-移动端能添加
     * @var int
     */
    public $mobileSwitch;

    /**
     * @description 机器详细介绍
     * @var string
     */
    public $description;

    /**
     * @description 机器人的名字
     * @var string
     */
    public $name;

    /**
     * @description 向群添加机器人时是否可改头像：0-不可必，1-可改
     * @var int
     */
    public $iconMdify;

    /**
     * @description 机器人消息回调时在header中添加的token,用于对钉钉鉴权
     * @var string
     */
    public $outgoingToken;

    /**
     * @description 是否支持单聊：0-不要单聊，1需要单聊
     * @var int
     */
    public $otoSupport;

}
