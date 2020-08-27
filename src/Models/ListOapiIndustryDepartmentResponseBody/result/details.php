<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiIndustryDepartmentResponseBody\result;

use AlibabaCloud\Tea\Model;

class details extends Model {
    protected $_name = [
        'feature' => 'feature',
        'contactType' => 'contact_type',
        'deptType' => 'dept_type',
        'name' => 'name',
        'deptId' => 'dept_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->feature) {
            $res['feature'] = $this->feature;
        }
        if (null !== $this->contactType) {
            $res['contact_type'] = $this->contactType;
        }
        if (null !== $this->deptType) {
            $res['dept_type'] = $this->deptType;
        }
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
     * @return details
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['feature'])){
            $model->feature = $map['feature'];
        }
        if(isset($map['contact_type'])){
            $model->contactType = $map['contact_type'];
        }
        if(isset($map['dept_type'])){
            $model->deptType = $map['dept_type'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 部门属性信息
     * @var string
     */
    public $feature;

    /**
     * @description 传统农村类型
     * @var string
     */
    public $contactType;

    /**
     * @description 户
     * @var string
     */
    public $deptType;

    /**
     * @description 部门名称
     * @var string
     */
    public $name;

    /**
     * @description 部门ID
     * @var int
     */
    public $deptId;

}
