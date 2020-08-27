<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListdimissionOapiSmartworkHrmEmployeeResponseBody\result;

use AlibabaCloud\Tea\Model;

class deptList extends Model {
    protected $_name = [
        'deptPath' => 'dept_path',
        'deptId' => 'dept_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deptPath) {
            $res['dept_path'] = $this->deptPath;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deptList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_path'])){
            $model->deptPath = $map['dept_path'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 部门路径
     * @var string
     */
    public $deptPath;

    /**
     * @description 部门id
     * @var int
     */
    public $deptId;

}
