<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiRoleVisibleParams extends Model {
    protected $_name = [
        'roleId' => 'role_id',
        'size' => 'size',
        'offset' => 'offset',
    ];
    public function validate() {
        Model::validateRequired('roleId', $this->roleId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiRoleVisibleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role_id'])){
            $model->roleId = $map['role_id'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        return $model;
    }
    /**
     * @description 角色ID
     * @var int
     */
    public $roleId;

    /**
     * @description 批量大小
     * @var int
     */
    public $size;

    /**
     * @description 偏移量
     * @var int
     */
    public $offset;

}
