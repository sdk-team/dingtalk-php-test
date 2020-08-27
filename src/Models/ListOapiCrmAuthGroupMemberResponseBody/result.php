<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupMemberResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupMemberResponseBody\result\memberInfo;

class result extends Model {
    protected $_name = [
        'name' => 'name',
        'memberInfo' => 'member_info',
        'roleId' => 'role_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->memberInfo) {
            $res['member_info'] = null !== $this->memberInfo ? $this->memberInfo->toMap() : null;
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
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['member_info'])){
            $model->memberInfo = memberInfo::fromMap($map['member_info']);
        }
        if(isset($map['role_id'])){
            $model->roleId = $map['role_id'];
        }
        return $model;
    }
    /**
     * @description 权限组名称
     * @var string
     */
    public $name;

    /**
     * @description 成员信息
     * @var memberInfo
     */
    public $memberInfo;

    /**
     * @description 权限组id
     * @var int
     */
    public $roleId;

}
