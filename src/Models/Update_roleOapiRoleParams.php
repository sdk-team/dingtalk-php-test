<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Update_roleOapiRoleParams extends Model {
    protected $_name = [
        'roleId' => 'roleId',
        'roleName' => 'roleName',
    ];
    public function validate() {
        Model::validateRequired('roleId', $this->roleId, true);
        Model::validateRequired('roleName', $this->roleName, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->roleId) {
            $res['roleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Update_roleOapiRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['roleId'])){
            $model->roleId = $map['roleId'];
        }
        if(isset($map['roleName'])){
            $model->roleName = $map['roleName'];
        }
        return $model;
    }
    /**
     * @description 角色id
     * @var int
     */
    public $roleId;

    /**
     * @description 角色名称
     * @var string
     */
    public $roleName;

}
