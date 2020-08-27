<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiIndustryDepartmentParams extends Model {
    protected $_name = [
        'deptId' => 'dept_id',
    ];
    public function validate() {
        Model::validateRequired('deptId', $this->deptId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiIndustryDepartmentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 部门ID
     * @var int
     */
    public $deptId;

}
