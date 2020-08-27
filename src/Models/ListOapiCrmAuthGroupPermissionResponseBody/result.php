<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects;

class result extends Model {
    protected $_name = [
        'authObjects' => 'auth_objects',
        'roleId' => 'role_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authObjects) {
            $res['auth_objects'] = [];
            if(null !== $this->authObjects && is_array($this->authObjects)){
                $n = 0;
                foreach($this->authObjects as $item){
                    $res['auth_objects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_objects'])){
            if(!empty($map['auth_objects'])){
                $model->authObjects = [];
                $n = 0;
                foreach($map['auth_objects'] as $item) {
                    $model->authObjects[$n++] = null !== $item ? authObjects::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['role_id'])){
            $model->roleId = $map['role_id'];
        }
        return $model;
    }
    /**
     * @description 权限内容
     * @var array
     */
    public $authObjects;

    /**
     * @description 权限组id
     * @var int
     */
    public $roleId;

}
