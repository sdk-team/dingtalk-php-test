<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetroleOapiRoleParams extends Model {
    protected $_name = [
        'roleId' => 'roleId',
    ];
    public function validate() {
        Model::validateRequired('roleId', $this->roleId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->roleId) {
            $res['roleId'] = $this->roleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetroleOapiRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['roleId'])){
            $model->roleId = $map['roleId'];
        }
        return $model;
    }
    /**
     * @description 角色id
     * @var int
     */
    public $roleId;

}
