<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduStudentResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'name' => 'name',
        'studentNo' => 'student_no',
        'studentUserid' => 'student_userid',
        'campusId' => 'campus_id',
        'periodId' => 'period_id',
        'gradeId' => 'grade_id',
        'classId' => 'class_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->studentNo) {
            $res['student_no'] = $this->studentNo;
        }
        if (null !== $this->studentUserid) {
            $res['student_userid'] = $this->studentUserid;
        }
        if (null !== $this->campusId) {
            $res['campus_id'] = $this->campusId;
        }
        if (null !== $this->periodId) {
            $res['period_id'] = $this->periodId;
        }
        if (null !== $this->gradeId) {
            $res['grade_id'] = $this->gradeId;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['student_no'])){
            $model->studentNo = $map['student_no'];
        }
        if(isset($map['student_userid'])){
            $model->studentUserid = $map['student_userid'];
        }
        if(isset($map['campus_id'])){
            $model->campusId = $map['campus_id'];
        }
        if(isset($map['period_id'])){
            $model->periodId = $map['period_id'];
        }
        if(isset($map['grade_id'])){
            $model->gradeId = $map['grade_id'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        return $model;
    }
    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 学号
     * @var string
     */
    public $studentNo;

    /**
     * @description 学生ID
     * @var string
     */
    public $studentUserid;

    /**
     * @description 校区ID
     * @var int
     */
    public $campusId;

    /**
     * @description 学段ID
     * @var int
     */
    public $periodId;

    /**
     * @description 年级ID
     * @var int
     */
    public $gradeId;

    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

}
