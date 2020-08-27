<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpRoleResponseBody\result\list_;

use AlibabaCloud\Tea\Model;

class roles extends Model {
    protected $_name = [
        'id' => 'id',
        'roleName' => 'role_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['role_name'])){
            $model->roleName = $map['role_name'];
        }
        return $model;
    }
    /**
     * @description 角色ID
     * @var int
     */
    public $id;

    /**
     * @description 角色名称
     * @var string
     */
    public $roleName;

}
