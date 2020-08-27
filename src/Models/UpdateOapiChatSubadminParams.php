<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiChatSubadminParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'userids' => 'userids',
        'role' => 'role',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('userids', $this->userids, true);
        Model::validateRequired('role', $this->role, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->userids) {
            $res['userids'] = $this->userids;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiChatSubadminParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['userids'])){
            if(!empty($map['userids'])){
                $model->userids = $map['userids'];
            }
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        return $model;
    }
    /**
     * @description 群会话id
     * @var string
     */
    public $chatid;

    /**
     * @description 群成员id
     * @var array
     */
    public $userids;

    /**
     * @description 设置2添加为管理员，设置3删除该管理员
     * @var int
     */
    public $role;

}
