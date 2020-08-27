<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiImChatServicegroupMemberResponseBody\result;

use AlibabaCloud\Tea\Model;

class members extends Model {
    protected $_name = [
        'dingtalkId' => 'dingtalk_id',
        'role' => 'role',
        'nickName' => 'nick_name',
        'groupNickName' => 'group_nick_name',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dingtalkId) {
            $res['dingtalk_id'] = $this->dingtalkId;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }
        if (null !== $this->groupNickName) {
            $res['group_nick_name'] = $this->groupNickName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return members
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dingtalk_id'])){
            $model->dingtalkId = $map['dingtalk_id'];
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['nick_name'])){
            $model->nickName = $map['nick_name'];
        }
        if(isset($map['group_nick_name'])){
            $model->groupNickName = $map['group_nick_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 成员的ID
     * @var string
     */
    public $dingtalkId;

    /**
     * @description 角色，2-管理员、3-普通成员
     * @var string
     */
    public $role;

    /**
     * @description 昵称
     * @var string
     */
    public $nickName;

    /**
     * @description 群昵称
     * @var string
     */
    public $groupNickName;

    /**
     * @description 员工Id
     * @var string
     */
    public $userid;

}
