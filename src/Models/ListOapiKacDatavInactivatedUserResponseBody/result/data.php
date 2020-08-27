<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavInactivatedUserResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'deptId' => 'dept_id',
        'deptName' => 'dept_name',
        'userid' => 'userid',
        'staffJobNum' => 'staff_job_num',
        'staffName' => 'staff_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->staffJobNum) {
            $res['staff_job_num'] = $this->staffJobNum;
        }
        if (null !== $this->staffName) {
            $res['staff_name'] = $this->staffName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['staff_job_num'])){
            $model->staffJobNum = $map['staff_job_num'];
        }
        if(isset($map['staff_name'])){
            $model->staffName = $map['staff_name'];
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
    public $deptName;

    /**
     * @description 员工在当前企业内的唯一标识，也称staffId。可由企业在创建时指定，并代表一定含义比如工号，创建后不可修改
     * @var string
     */
    public $userid;

    /**
     * @description 员工工号
     * @var string
     */
    public $staffJobNum;

    /**
     * @description 员工姓名
     * @var string
     */
    public $staffName;

}
