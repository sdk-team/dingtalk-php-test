<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetrolegroupOapiRoleResponseBody\roleGroup;

use AlibabaCloud\Tea\Model;

class roles extends Model {
    protected $_name = [
        'roleId' => 'role_id',
        'roleName' => 'role_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['role_name'] = $this->roleName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return roles
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role_id'])){
            $model->roleId = $map['role_id'];
        }
        if(isset($map['role_name'])){
            $model->roleName = $map['role_name'];
        }
        return $model;
    }
    /**
     * @description 角色id
     * @var int
     */
    public $roleId;

    /**
     * @description 角色名
     * @var string
     */
    public $roleName;

}
