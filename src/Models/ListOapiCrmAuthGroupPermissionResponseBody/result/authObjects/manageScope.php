<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects\manageScope\ext;

class manageScope extends Model {
    protected $_name = [
        'ext' => 'ext',
        'hasAuth' => 'has_auth',
        'name' => 'name',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->ext) {
            $res['ext'] = null !== $this->ext ? $this->ext->toMap() : null;
        }
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
     * @return manageScope
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ext'])){
            $model->ext = ext::fromMap($map['ext']);
        }
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
     * @description 扩展内容
     * @var ext
     */
    public $ext;

    /**
     * @description 是否有权限
     * @var bool
     */
    public $hasAuth;

    /**
     * @description 管理范围名称
     * @var string
     */
    public $name;

    /**
     * @description 管理范围类型
     * @var string
     */
    public $type;

}
