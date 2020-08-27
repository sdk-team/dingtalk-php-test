<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SimplelistOapiRoleResponseBody\result\list_;

use AlibabaCloud\Tea\Model;

class manageScopes extends Model {
    protected $_name = [
        'deptId' => 'dept_id',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return manageScopes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 部门id
     * @var int
     */
    public $deptId;

    /**
     * @description 部门名称
     * @var string
     */
    public $name;

}
