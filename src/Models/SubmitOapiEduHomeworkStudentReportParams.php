<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SubmitOapiEduHomeworkStudentReportParams extends Model {
    protected $_name = [
        'hwResult' => 'hw_result',
        'classId' => 'class_id',
        'studentName' => 'student_name',
        'studentId' => 'student_id',
        'hwId' => 'hw_id',
        'hwReport' => 'hw_report',
        'bizCode' => 'biz_code',
        'attributes' => 'attributes',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('studentName', $this->studentName, true);
        Model::validateRequired('studentId', $this->studentId, true);
        Model::validateRequired('hwId', $this->hwId, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->hwResult) {
            $res['hw_result'] = $this->hwResult;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->studentName) {
            $res['student_name'] = $this->studentName;
        }
        if (null !== $this->studentId) {
            $res['student_id'] = $this->studentId;
        }
        if (null !== $this->hwId) {
            $res['hw_id'] = $this->hwId;
        }
        if (null !== $this->hwReport) {
            $res['hw_report'] = $this->hwReport;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitOapiEduHomeworkStudentReportParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['hw_result'])){
            $model->hwResult = $map['hw_result'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['student_name'])){
            $model->studentName = $map['student_name'];
        }
        if(isset($map['student_id'])){
            $model->studentId = $map['student_id'];
        }
        if(isset($map['hw_id'])){
            $model->hwId = $map['hw_id'];
        }
        if(isset($map['hw_report'])){
            $model->hwReport = $map['hw_report'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        return $model;
    }
    /**
     * @description 作业结果
     * @var string
     */
    public $hwResult;

    /**
     * @description 部门ID
     * @var int
     */
    public $classId;

    /**
     * @description 学生姓名
     * @var string
     */
    public $studentName;

    /**
     * @description 学生ID
     * @var string
     */
    public $studentId;

    /**
     * @description 作业ID
     * @var int
     */
    public $hwId;

    /**
     * @description 作业报告
     * @var string
     */
    public $hwReport;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

    /**
     * @description 扩展属性
     * @var string
     */
    public $attributes;

}
