<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupMemberResponseBody\result\memberInfo;

use AlibabaCloud\Tea\Model;

class dept extends Model {
    protected $_name = [
        'name' => 'name',
        'deptId' => 'dept_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dept
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 部门名称
     * @var string
     */
    public $name;

    /**
     * @description 部门id
     * @var int
     */
    public $deptId;

}
