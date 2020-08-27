<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceProjectMemberRoleParams\role;

class UpdateOapiWorkspaceProjectMemberRoleParams extends Model {
    protected $_name = [
        'role' => 'role',
    ];
    public function validate() {
        Model::validateRequired('role', $this->role, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->role) {
            $res['role'] = null !== $this->role ? $this->role->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiWorkspaceProjectMemberRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role'])){
            $model->role = role::fromMap($map['role']);
        }
        return $model;
    }
    /**
     * @description 成员设置角色
     * @var role
     */
    public $role;

}
