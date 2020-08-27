<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiChatResponseBody;

use AlibabaCloud\Tea\Model;

class chatInfo extends Model {
    protected $_name = [
        'name' => 'name',
        'owner' => 'owner',
        'useridlist' => 'useridlist',
        'extidlist' => 'extidlist',
        'agentidlist' => 'agentidlist',
        'conversationTag' => 'conversationTag',
        'chatBannedType' => 'chatBannedType',
        'searchable' => 'searchable',
        'validationType' => 'validationType',
        'mentionAllAuthority' => 'mentionAllAuthority',
        'managementType' => 'managementType',
        'showHistoryType' => 'showHistoryType',
        'icon' => 'icon',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->useridlist) {
            $res['useridlist'] = $this->useridlist;
        }
        if (null !== $this->extidlist) {
            $res['extidlist'] = $this->extidlist;
        }
        if (null !== $this->agentidlist) {
            $res['agentidlist'] = $this->agentidlist;
        }
        if (null !== $this->conversationTag) {
            $res['conversationTag'] = $this->conversationTag;
        }
        if (null !== $this->chatBannedType) {
            $res['chatBannedType'] = $this->chatBannedType;
        }
        if (null !== $this->searchable) {
            $res['searchable'] = $this->searchable;
        }
        if (null !== $this->validationType) {
            $res['validationType'] = $this->validationType;
        }
        if (null !== $this->mentionAllAuthority) {
            $res['mentionAllAuthority'] = $this->mentionAllAuthority;
        }
        if (null !== $this->managementType) {
            $res['managementType'] = $this->managementType;
        }
        if (null !== $this->showHistoryType) {
            $res['showHistoryType'] = $this->showHistoryType;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return chatInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['owner'])){
            $model->owner = $map['owner'];
        }
        if(isset($map['useridlist'])){
            if(!empty($map['useridlist'])){
                $model->useridlist = $map['useridlist'];
            }
        }
        if(isset($map['extidlist'])){
            if(!empty($map['extidlist'])){
                $model->extidlist = $map['extidlist'];
            }
        }
        if(isset($map['agentidlist'])){
            if(!empty($map['agentidlist'])){
                $model->agentidlist = $map['agentidlist'];
            }
        }
        if(isset($map['conversationTag'])){
            $model->conversationTag = $map['conversationTag'];
        }
        if(isset($map['chatBannedType'])){
            $model->chatBannedType = $map['chatBannedType'];
        }
        if(isset($map['searchable'])){
            $model->searchable = $map['searchable'];
        }
        if(isset($map['validationType'])){
            $model->validationType = $map['validationType'];
        }
        if(isset($map['mentionAllAuthority'])){
            $model->mentionAllAuthority = $map['mentionAllAuthority'];
        }
        if(isset($map['managementType'])){
            $model->managementType = $map['managementType'];
        }
        if(isset($map['showHistoryType'])){
            $model->showHistoryType = $map['showHistoryType'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description owner
     * @var string
     */
    public $owner;

    /**
     * @description useridlist
     * @var array
     */
    public $useridlist;

    /**
     * @description extidlist
     * @var array
     */
    public $extidlist;

    /**
     * @description agentidlist
     * @var array
     */
    public $agentidlist;

    /**
     * @description conversationTag
     * @var int
     */
    public $conversationTag;

    /**
     * @description 是否全员禁用 0 不禁言 1 全员禁言
     * @var int
     */
    public $chatBannedType;

    /**
     * @description 是否可以搜索群名 0 不可以 1可以搜索
     * @var int
     */
    public $searchable;

    /**
     * @description 入群需群主或群管理员同意 0不需要 1需要
     * @var int
     */
    public $validationType;

    /**
     * @description 尽群主和管理员可@所有人 0 否 1 是
     * @var int
     */
    public $mentionAllAuthority;

    /**
     * @description 仅群主和群管理员可管理 0否 1 是
     * @var int
     */
    public $managementType;

    /**
     * @description 新成员可查看聊天历史 0否 1是
     * @var int
     */
    public $showHistoryType;

    /**
     * @description 群头像mediaId
     * @var string
     */
    public $icon;

}
