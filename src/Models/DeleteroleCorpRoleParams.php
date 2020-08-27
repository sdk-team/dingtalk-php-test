<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteroleCorpRoleParams extends Model {
    protected $_name = [
        'roleId' => 'role_id',
    ];
    public function validate() {
        Model::validateRequired('roleId', $this->roleId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteroleCorpRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role_id'])){
            $model->roleId = $map['role_id'];
        }
        return $model;
    }
    /**
     * @description 角色id
     * @var int
     */
    public $roleId;

}
