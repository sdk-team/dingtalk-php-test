<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbychatbotidsCorpChatbotResponseBody\result;

use AlibabaCloud\Tea\Model;

class resultList extends Model {
    protected $_name = [
        'botType' => 'bot_type',
        'chatbotId' => 'chatbot_id',
        'name' => 'name',
        'icon' => 'icon',
        'breif' => 'breif',
        'description' => 'description',
        'outgoingUrl' => 'outgoing_url',
        'outgoingToken' => 'outgoing_token',
        'previewMediaId' => 'preview_media_id',
        'mobileSwitch' => 'mobile_switch',
        'function' => 'function',
        'nameModify' => 'name_modify',
        'iconMdify' => 'icon_mdify',
        'otoSupport' => 'oto_support',
        'authority' => 'authority',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->botType) {
            $res['bot_type'] = $this->botType;
        }
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->breif) {
            $res['breif'] = $this->breif;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->outgoingUrl) {
            $res['outgoing_url'] = $this->outgoingUrl;
        }
        if (null !== $this->outgoingToken) {
            $res['outgoing_token'] = $this->outgoingToken;
        }
        if (null !== $this->previewMediaId) {
            $res['preview_media_id'] = $this->previewMediaId;
        }
        if (null !== $this->mobileSwitch) {
            $res['mobile_switch'] = $this->mobileSwitch;
        }
        if (null !== $this->function) {
            $res['function'] = $this->function;
        }
        if (null !== $this->nameModify) {
            $res['name_modify'] = $this->nameModify;
        }
        if (null !== $this->iconMdify) {
            $res['icon_mdify'] = $this->iconMdify;
        }
        if (null !== $this->otoSupport) {
            $res['oto_support'] = $this->otoSupport;
        }
        if (null !== $this->authority) {
            $res['authority'] = $this->authority;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resultList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['bot_type'])){
            $model->botType = $map['bot_type'];
        }
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['breif'])){
            $model->breif = $map['breif'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['outgoing_url'])){
            $model->outgoingUrl = $map['outgoing_url'];
        }
        if(isset($map['outgoing_token'])){
            $model->outgoingToken = $map['outgoing_token'];
        }
        if(isset($map['preview_media_id'])){
            $model->previewMediaId = $map['preview_media_id'];
        }
        if(isset($map['mobile_switch'])){
            $model->mobileSwitch = $map['mobile_switch'];
        }
        if(isset($map['function'])){
            $model->function = $map['function'];
        }
        if(isset($map['name_modify'])){
            $model->nameModify = $map['name_modify'];
        }
        if(isset($map['icon_mdify'])){
            $model->iconMdify = $map['icon_mdify'];
        }
        if(isset($map['oto_support'])){
            $model->otoSupport = $map['oto_support'];
        }
        if(isset($map['authority'])){
            $model->authority = $map['authority'];
        }
        return $model;
    }
    /**
     * @description 2-企业对内机器人，3-企业对外机器人
     * @var int
     */
    public $botType;

    /**
     * @description 机器人chatbotId
     * @var string
     */
    public $chatbotId;

    /**
     * @description 机器人名字
     * @var string
     */
    public $name;

    /**
     * @description 机器人头像
     * @var string
     */
    public $icon;

    /**
     * @description 机器人简介
     * @var string
     */
    public $breif;

    /**
     * @description 机器人详细介绍
     * @var string
     */
    public $description;

    /**
     * @description 机器人回调地址
     * @var string
     */
    public $outgoingUrl;

    /**
     * @description 机器人消息回调时在header中添加的token,用于对钉钉鉴权
     * @var string
     */
    public $outgoingToken;

    /**
     * @description 机器人预览图
     * @var string
     */
    public $previewMediaId;

    /**
     * @description 手机端是否能添加机器人：0-移动端不能加，1-移动端能添加
     * @var int
     */
    public $mobileSwitch;

    /**
     * @description INCOMING = 1,OUTGOING = 2,INOUT = 3
     * @var int
     */
    public $function;

    /**
     * @description 向群添加机器人时是否可改名字：0-不可必，1-可改
     * @var int
     */
    public $nameModify;

    /**
     * @description 向群添加机器人时是否可改头像：0-不可必，1-可改
     * @var int
     */
    public $iconMdify;

    /**
     * @description 是否支持单聊：0-不要单聊，1需要单聊
     * @var int
     */
    public $otoSupport;

    /**
     * @description 0-正常，1-只服务端可管理
     * @var int
     */
    public $authority;

}
