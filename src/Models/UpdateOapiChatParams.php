<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiChatParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'name' => 'name',
        'owner' => 'owner',
        'ownerType' => 'ownerType',
        'addUseridlist' => 'add_useridlist',
        'delUseridlist' => 'del_useridlist',
        'addExtidlist' => 'add_extidlist',
        'delExtidlist' => 'del_extidlist',
        'icon' => 'icon',
        'isBan' => 'isBan',
        'searchable' => 'searchable',
        'validationType' => 'validationType',
        'mentionAllAuthority' => 'mentionAllAuthority',
        'managementType' => 'managementType',
        'chatBannedType' => 'chatBannedType',
        'showHistoryType' => 'showHistoryType',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->ownerType) {
            $res['ownerType'] = $this->ownerType;
        }
        if (null !== $this->addUseridlist) {
            $res['add_useridlist'] = $this->addUseridlist;
        }
        if (null !== $this->delUseridlist) {
            $res['del_useridlist'] = $this->delUseridlist;
        }
        if (null !== $this->addExtidlist) {
            $res['add_extidlist'] = $this->addExtidlist;
        }
        if (null !== $this->delExtidlist) {
            $res['del_extidlist'] = $this->delExtidlist;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->isBan) {
            $res['isBan'] = $this->isBan;
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
        if (null !== $this->showHistoryType) {
            $res['showHistoryType'] = $this->showHistoryType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiChatParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['owner'])){
            $model->owner = $map['owner'];
        }
        if(isset($map['ownerType'])){
            $model->ownerType = $map['ownerType'];
        }
        if(isset($map['add_useridlist'])){
            if(!empty($map['add_useridlist'])){
                $model->addUseridlist = $map['add_useridlist'];
            }
        }
        if(isset($map['del_useridlist'])){
            if(!empty($map['del_useridlist'])){
                $model->delUseridlist = $map['del_useridlist'];
            }
        }
        if(isset($map['add_extidlist'])){
            if(!empty($map['add_extidlist'])){
                $model->addExtidlist = $map['add_extidlist'];
            }
        }
        if(isset($map['del_extidlist'])){
            if(!empty($map['del_extidlist'])){
                $model->delExtidlist = $map['del_extidlist'];
            }
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['isBan'])){
            $model->isBan = $map['isBan'];
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
        if(isset($map['showHistoryType'])){
            $model->showHistoryType = $map['showHistoryType'];
        }
        return $model;
    }
    /**
     * @description 群会话id
     * @var string
     */
    public $chatid;

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
     * @description 群主类型，emp：企业员工，ext：外部联系人
     * @var string
     */
    public $ownerType;

    /**
     * @description 添加成员列表
     * @var array
     */
    public $addUseridlist;

    /**
     * @description 删除成员列表
     * @var array
     */
    public $delUseridlist;

    /**
     * @description 添加外部联系人成员列表
     * @var array
     */
    public $addExtidlist;

    /**
     * @description 删除外部联系人成员列表
     * @var array
     */
    public $delExtidlist;

    /**
     * @description 群头像mediaId
     * @var string
     */
    public $icon;

    /**
     * @description 是否禁言
     * @var bool
     */
    public $isBan;

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
     * @description 新成员可查看聊天历史 0否 1是
     * @var int
     */
    public $showHistoryType;

}
