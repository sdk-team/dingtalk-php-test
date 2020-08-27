<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRoleResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRoleResponseBody\result\list_\roles;

class list_ extends Model {
    protected $_name = [
        'name' => 'name',
        'groupId' => 'groupId',
        'roles' => 'roles',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->roles) {
            $res['roles'] = [];
            if(null !== $this->roles && is_array($this->roles)){
                $n = 0;
                foreach($this->roles as $item){
                    $res['roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['groupId'])){
            $model->groupId = $map['groupId'];
        }
        if(isset($map['roles'])){
            if(!empty($map['roles'])){
                $model->roles = [];
                $n = 0;
                foreach($map['roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 角色组名称
     * @var string
     */
    public $name;

    /**
     * @description 角色组id
     * @var int
     */
    public $groupId;

    /**
     * @description roles
     * @var array
     */
    public $roles;

}
