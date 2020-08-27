<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpRoleResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpRoleResponseBody\result\list_\roles;

class list_ extends Model {
    protected $_name = [
        'roles' => 'roles',
        'groupName' => 'group_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->roles) {
            $res['roles'] = [];
            if(null !== $this->roles && is_array($this->roles)){
                $n = 0;
                foreach($this->roles as $item){
                    $res['roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['roles'])){
            if(!empty($map['roles'])){
                $model->roles = [];
                $n = 0;
                foreach($map['roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['group_name'])){
            $model->groupName = $map['group_name'];
        }
        return $model;
    }
    /**
     * @description 角色列表
     * @var array
     */
    public $roles;

    /**
     * @description 角色分组名称
     * @var string
     */
    public $groupName;

}
