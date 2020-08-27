<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiImChatServicegroupParams extends Model {
    protected $_name = [
        'title' => 'title',
        'ownerUserid' => 'owner_userid',
        'orgInnerGroup' => 'org_inner_group',
        'groupUniqId' => 'group_uniq_id',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('ownerUserid', $this->ownerUserid, true);
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
        if (null !== $this->orgInnerGroup) {
            $res['org_inner_group'] = $this->orgInnerGroup;
        }
        if (null !== $this->groupUniqId) {
            $res['group_uniq_id'] = $this->groupUniqId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiImChatServicegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['owner_userid'])){
            $model->ownerUserid = $map['owner_userid'];
        }
        if(isset($map['org_inner_group'])){
            $model->orgInnerGroup = $map['org_inner_group'];
        }
        if(isset($map['group_uniq_id'])){
            $model->groupUniqId = $map['group_uniq_id'];
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
     * @description 是否企业内部服务群
     * @var bool
     */
    public $orgInnerGroup;

    /**
     * @description 建群去重的业务id
     * @var string
     */
    public $groupUniqId;

}
