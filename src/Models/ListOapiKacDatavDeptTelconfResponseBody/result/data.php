<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavDeptTelconfResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'deptId' => 'dept_id',
        'deptName' => 'dept_name',
        'joinCount' => 'join_count',
        'startAvgLenMin' => 'start_avg_len_min',
        'startCount' => 'start_count',
        'startLenMin' => 'start_len_min',
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
        if (null !== $this->joinCount) {
            $res['join_count'] = $this->joinCount;
        }
        if (null !== $this->startAvgLenMin) {
            $res['start_avg_len_min'] = $this->startAvgLenMin;
        }
        if (null !== $this->startCount) {
            $res['start_count'] = $this->startCount;
        }
        if (null !== $this->startLenMin) {
            $res['start_len_min'] = $this->startLenMin;
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
        if(isset($map['join_count'])){
            $model->joinCount = $map['join_count'];
        }
        if(isset($map['start_avg_len_min'])){
            $model->startAvgLenMin = $map['start_avg_len_min'];
        }
        if(isset($map['start_count'])){
            $model->startCount = $map['start_count'];
        }
        if(isset($map['start_len_min'])){
            $model->startLenMin = $map['start_len_min'];
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
     * @description 参与人次
     * @var int
     */
    public $joinCount;

    /**
     * @description 平均时长（分钟）
     * @var string
     */
    public $startAvgLenMin;

    /**
     * @description 发起次数
     * @var int
     */
    public $startCount;

    /**
     * @description 发起总时长（分钟）
     * @var string
     */
    public $startLenMin;

}
