<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects\manageScope\ext;

use AlibabaCloud\Tea\Model;

class deptInfo extends Model {
    protected $_name = [
        'deptName' => 'dept_name',
        'deptId' => 'dept_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deptInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
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
    public $deptName;

    /**
     * @description 部门id
     * @var int
     */
    public $deptId;

}
