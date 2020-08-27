<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SetOapiRoleVisibleParams extends Model {
    protected $_name = [
        'roleId' => 'role_id',
        'visibleRoleIds' => 'visible_role_ids',
    ];
    public function validate() {
        Model::validateRequired('roleId', $this->roleId, true);
        Model::validateRequired('visibleRoleIds', $this->visibleRoleIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }
        if (null !== $this->visibleRoleIds) {
            $res['visible_role_ids'] = $this->visibleRoleIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SetOapiRoleVisibleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role_id'])){
            $model->roleId = $map['role_id'];
        }
        if(isset($map['visible_role_ids'])){
            if(!empty($map['visible_role_ids'])){
                $model->visibleRoleIds = $map['visible_role_ids'];
            }
        }
        return $model;
    }
    /**
     * @description roleId
     * @var int
     */
    public $roleId;

    /**
     * @description roleId可见的roleIdList
     * @var array
     */
    public $visibleRoleIds;

}
