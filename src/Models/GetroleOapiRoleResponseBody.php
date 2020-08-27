<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetroleOapiRoleResponseBody\role;

class GetroleOapiRoleResponseBody extends Model {
    protected $_name = [
        'role' => 'role',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->role) {
            $res['role'] = null !== $this->role ? $this->role->toMap() : null;
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
     * @return GetroleOapiRoleResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role'])){
            $model->role = role::fromMap($map['role']);
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
     * @description result
     * @var role
     */
    public $role;

    /**
     * @description dingOpenErrcode
     * @var int
     */
    public $errcode;

    /**
     * @description errorMsg
     * @var string
     */
    public $errmsg;

}
