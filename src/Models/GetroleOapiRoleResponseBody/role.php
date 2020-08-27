<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetroleOapiRoleResponseBody;

use AlibabaCloud\Tea\Model;

class role extends Model {
    protected $_name = [
        'name' => 'name',
        'groupId' => 'groupId',
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
        return $res;
    }
    /**
     * @param array $map
     * @return role
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['groupId'])){
            $model->groupId = $map['groupId'];
        }
        return $model;
    }
    /**
     * @description 角色名称
     * @var string
     */
    public $name;

    /**
     * @description 角色组id
     * @var int
     */
    public $groupId;

}
