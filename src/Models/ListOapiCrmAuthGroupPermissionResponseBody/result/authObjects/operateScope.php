<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects;

use AlibabaCloud\Tea\Model;

class operateScope extends Model {
    protected $_name = [
        'hasAuth' => 'has_auth',
        'name' => 'name',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasAuth) {
            $res['has_auth'] = $this->hasAuth;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return operateScope
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_auth'])){
            $model->hasAuth = $map['has_auth'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @description 是否有权限
     * @var bool
     */
    public $hasAuth;

    /**
     * @description 操作名称
     * @var string
     */
    public $name;

    /**
     * @description 操作类型
     * @var string
     */
    public $type;

}
