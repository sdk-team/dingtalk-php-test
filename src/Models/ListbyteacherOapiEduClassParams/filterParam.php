<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyteacherOapiEduClassParams;

use AlibabaCloud\Tea\Model;

class filterParam extends Model {
    protected $_name = [
        'groupType' => 'group_type',
        'role' => 'role',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupType) {
            $res['group_type'] = $this->groupType;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return filterParam
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_type'])){
            $model->groupType = $map['group_type'];
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        return $model;
    }
    /**
     * @description 群类型
     * @var string
     */
    public $groupType;

    /**
     * @description 角色
     * @var string
     */
    public $role;

}
