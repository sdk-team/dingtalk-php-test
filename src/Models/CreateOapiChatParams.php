<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiChatParams extends Model {
    protected $_name = [
        'name' => 'name',
        'owner' => 'owner',
        'useridlist' => 'useridlist',
        'ownerType' => 'ownerType',
        'conversationTag' => 'conversationTag',
        'showHistoryType' => 'showHistoryType',
        'extidlist' => 'extidlist',
        'searchable' => 'searchable',
        'validationType' => 'validationType',
        'mentionAllAuthority' => 'mentionAllAuthority',
        'managementType' => 'managementType',
        'chatBannedType' => 'chatBannedType',
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
        if (null !== $this->ownerType) {
            $res['ownerType'] = $this->ownerType;
        }
        if (null !== $this->conversationTag) {
            $res['conversationTag'] = $this->conversationTag;
        }
        if (null !== $this->showHistoryType) {
            $res['showHistoryType'] = $this->showHistoryType;
        }
        if (null !== $this->extidlist) {
            $res['extidlist'] = $this->extidlist;
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
        if (null !== $this->chatBannedType) {
            $res['chatBannedType'] = $this->chatBannedType;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiChatParams
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
        if(isset($map['ownerType'])){
            $model->ownerType = $map['ownerType'];
        }
        if(isset($map['conversationTag'])){
            $model->conversationTag = $map['conversationTag'];
        }
        if(isset($map['showHistoryType'])){
            $model->showHistoryType = $map['showHistoryType'];
        }
        if(isset($map['extidlist'])){
            if(!empty($map['extidlist'])){
                $model->extidlist = $map['extidlist'];
            }
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
        if(isset($map['chatBannedType'])){
            $model->chatBannedType = $map['chatBannedType'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        return $model;
    }
    /**
     * @description 群名称
     * @var string
     */
    public $name;

    /**
     * @description 群主的userId
     * @var string
     */
    public $owner;

    /**
     * @description 群成员userId列表
     * @var array
     */
    public $useridlist;

    /**
     * @description 群主类型，emp：企业员工，ext：外部联系人
     * @var string
     */
    public $ownerType;

    /**
     * @description 群类型，2：企业群，0：普通群
     * @var int
     */
    public $conversationTag;

    /**
     * @description 新成员可查看100条聊天历史消息的类型，1：可查看，默认或0：不可查看
     * @var int
     */
    public $showHistoryType;

    /**
     * @description 外部联系人成员列表
     * @var array
     */
    public $extidlist;

    /**
     * @description 群可搜索，0-默认，不可搜索，1-可搜索
     * @var int
     */
    public $searchable;

    /**
     * @description 入群验证，0：不入群验证（默认） 1：入群验证
     * @var int
     */
    public $validationType;

    /**
     * @description @all 权限，0-默认，所有人，1-仅群主可@all
     * @var int
     */
    public $mentionAllAuthority;

    /**
     * @description 管理类型，0-默认，所有人可管理，1-仅群主可管理
     * @var int
     */
    public $managementType;

    /**
     * @description 群禁言，0-默认，不禁言，1-全员禁言
     * @var int
     */
    public $chatBannedType;

    /**
     * @description 群头像资源id
     * @var string
     */
    public $icon;

}
