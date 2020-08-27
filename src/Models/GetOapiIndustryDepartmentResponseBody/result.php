<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiIndustryDepartmentResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'feature' => 'feature',
        'contactType' => 'contact_type',
        'deptType' => 'dept_type',
        'superId' => 'super_id',
        'name' => 'name',
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
        if (null !== $this->superId) {
            $res['super_id'] = $this->superId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
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
        if(isset($map['super_id'])){
            $model->superId = $map['super_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 部门属性
     * @var string
     */
    public $feature;

    /**
     * @description 通讯录类型，行业相关
     * @var string
     */
    public $contactType;

    /**
     * @description 部门类型，行业相关
     * @var string
     */
    public $deptType;

    /**
     * @description 父部门ID
     * @var int
     */
    public $superId;

    /**
     * @description 部门名称
     * @var string
     */
    public $name;

}
