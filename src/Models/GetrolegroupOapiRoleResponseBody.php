<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetrolegroupOapiRoleResponseBody\roleGroup;

class GetrolegroupOapiRoleResponseBody extends Model {
    protected $_name = [
        'roleGroup' => 'role_group',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->roleGroup) {
            $res['role_group'] = null !== $this->roleGroup ? $this->roleGroup->toMap() : null;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetrolegroupOapiRoleResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role_group'])){
            $model->roleGroup = roleGroup::fromMap($map['role_group']);
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 角色组信息
     * @var roleGroup
     */
    public $roleGroup;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

}
