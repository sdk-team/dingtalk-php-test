<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiImChatControlgroupParams extends Model {
    protected $_name = [
        'title' => 'title',
        'ownerUserid' => 'owner_userid',
        'groupUniqId' => 'group_uniq_id',
        'memberUserids' => 'member_userids',
        'authorityType' => 'authority_type',
        'groupType' => 'group_type',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('ownerUserid', $this->ownerUserid, true);
        Model::validateRequired('memberUserids', $this->memberUserids, true);
        Model::validateMaxLength('title', $this->title, 256);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->ownerUserid) {
            $res['owner_userid'] = $this->ownerUserid;
        }
        if (null !== $this->groupUniqId) {
            $res['group_uniq_id'] = $this->groupUniqId;
        }
        if (null !== $this->memberUserids) {
            $res['member_userids'] = $this->memberUserids;
        }
        if (null !== $this->authorityType) {
            $res['authority_type'] = $this->authorityType;
        }
        if (null !== $this->groupType) {
            $res['group_type'] = $this->groupType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiImChatControlgroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['owner_userid'])){
            $model->ownerUserid = $map['owner_userid'];
        }
        if(isset($map['group_uniq_id'])){
            $model->groupUniqId = $map['group_uniq_id'];
        }
        if(isset($map['member_userids'])){
            if(!empty($map['member_userids'])){
                $model->memberUserids = $map['member_userids'];
            }
        }
        if(isset($map['authority_type'])){
            $model->authorityType = $map['authority_type'];
        }
        if(isset($map['group_type'])){
            $model->groupType = $map['group_type'];
        }
        return $model;
    }
    /**
     * @description 群标题
     * @var string
     */
    public $title;

    /**
     * @description 群主在钉钉组织内的userid
     * @var string
     */
    public $ownerUserid;

    /**
     * @description 建群去重的业务id
     * @var string
     */
    public $groupUniqId;

    /**
     * @description 群成员在钉钉组织内的userid列表
     * @var array
     */
    public $memberUserids;

    /**
     * @description 群的管理权限设置，0-所有人可管理（默认），1-仅群主和群管理员可管理
     * @var int
     */
    public $authorityType;

    /**
     * @description goc模拟群：goc， 网商银行群：eCommerce
     * @var string
     */
    public $groupType;

}
