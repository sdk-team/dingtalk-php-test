<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduTypeDataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'nonePatriarchStudentRatio' => 'none_patriarch_student_ratio',
        'nonePatriarchStudentCnt' => 'none_patriarch_student_cnt',
        'multiPatriarchStudentRatio' => 'multi_patriarch_student_ratio',
        'schoolCntStd' => 'school_cnt_std',
        'studentCntStd' => 'student_cnt_std',
        'schoolType' => 'school_type',
        'twoPatriarchStudentRatio' => 'two_patriarch_student_ratio',
        'authTeacherCntStd' => 'auth_teacher_cnt_std',
        'twoPatriarchStudentCnt' => 'two_patriarch_student_cnt',
        'corpId' => 'corp_id',
        'singlePatriarchStudentRatio' => 'single_patriarch_student_ratio',
        'multiPatriarchStudentCnt' => 'multi_patriarch_student_cnt',
        'statDate' => 'stat_date',
        'classCntStd' => 'class_cnt_std',
        'patriarchCntStd' => 'patriarch_cnt_std',
        'singlePatriarchStudentCnt' => 'single_patriarch_student_cnt',
        'teacherCntStd' => 'teacher_cnt_std',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nonePatriarchStudentRatio) {
            $res['none_patriarch_student_ratio'] = $this->nonePatriarchStudentRatio;
        }
        if (null !== $this->nonePatriarchStudentCnt) {
            $res['none_patriarch_student_cnt'] = $this->nonePatriarchStudentCnt;
        }
        if (null !== $this->multiPatriarchStudentRatio) {
            $res['multi_patriarch_student_ratio'] = $this->multiPatriarchStudentRatio;
        }
        if (null !== $this->schoolCntStd) {
            $res['school_cnt_std'] = $this->schoolCntStd;
        }
        if (null !== $this->studentCntStd) {
            $res['student_cnt_std'] = $this->studentCntStd;
        }
        if (null !== $this->schoolType) {
            $res['school_type'] = $this->schoolType;
        }
        if (null !== $this->twoPatriarchStudentRatio) {
            $res['two_patriarch_student_ratio'] = $this->twoPatriarchStudentRatio;
        }
        if (null !== $this->authTeacherCntStd) {
            $res['auth_teacher_cnt_std'] = $this->authTeacherCntStd;
        }
        if (null !== $this->twoPatriarchStudentCnt) {
            $res['two_patriarch_student_cnt'] = $this->twoPatriarchStudentCnt;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->singlePatriarchStudentRatio) {
            $res['single_patriarch_student_ratio'] = $this->singlePatriarchStudentRatio;
        }
        if (null !== $this->multiPatriarchStudentCnt) {
            $res['multi_patriarch_student_cnt'] = $this->multiPatriarchStudentCnt;
        }
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->classCntStd) {
            $res['class_cnt_std'] = $this->classCntStd;
        }
        if (null !== $this->patriarchCntStd) {
            $res['patriarch_cnt_std'] = $this->patriarchCntStd;
        }
        if (null !== $this->singlePatriarchStudentCnt) {
            $res['single_patriarch_student_cnt'] = $this->singlePatriarchStudentCnt;
        }
        if (null !== $this->teacherCntStd) {
            $res['teacher_cnt_std'] = $this->teacherCntStd;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['none_patriarch_student_ratio'])){
            $model->nonePatriarchStudentRatio = $map['none_patriarch_student_ratio'];
        }
        if(isset($map['none_patriarch_student_cnt'])){
            $model->nonePatriarchStudentCnt = $map['none_patriarch_student_cnt'];
        }
        if(isset($map['multi_patriarch_student_ratio'])){
            $model->multiPatriarchStudentRatio = $map['multi_patriarch_student_ratio'];
        }
        if(isset($map['school_cnt_std'])){
            $model->schoolCntStd = $map['school_cnt_std'];
        }
        if(isset($map['student_cnt_std'])){
            $model->studentCntStd = $map['student_cnt_std'];
        }
        if(isset($map['school_type'])){
            $model->schoolType = $map['school_type'];
        }
        if(isset($map['two_patriarch_student_ratio'])){
            $model->twoPatriarchStudentRatio = $map['two_patriarch_student_ratio'];
        }
        if(isset($map['auth_teacher_cnt_std'])){
            $model->authTeacherCntStd = $map['auth_teacher_cnt_std'];
        }
        if(isset($map['two_patriarch_student_cnt'])){
            $model->twoPatriarchStudentCnt = $map['two_patriarch_student_cnt'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['single_patriarch_student_ratio'])){
            $model->singlePatriarchStudentRatio = $map['single_patriarch_student_ratio'];
        }
        if(isset($map['multi_patriarch_student_cnt'])){
            $model->multiPatriarchStudentCnt = $map['multi_patriarch_student_cnt'];
        }
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['class_cnt_std'])){
            $model->classCntStd = $map['class_cnt_std'];
        }
        if(isset($map['patriarch_cnt_std'])){
            $model->patriarchCntStd = $map['patriarch_cnt_std'];
        }
        if(isset($map['single_patriarch_student_cnt'])){
            $model->singlePatriarchStudentCnt = $map['single_patriarch_student_cnt'];
        }
        if(isset($map['teacher_cnt_std'])){
            $model->teacherCntStd = $map['teacher_cnt_std'];
        }
        return $model;
    }
    /**
     * @description 无家长监管学生比率
     * @var string
     */
    public $nonePatriarchStudentRatio;

    /**
     * @description 无家长监管学生数
     * @var string
     */
    public $nonePatriarchStudentCnt;

    /**
     * @description 多家长监管学生比率
     * @var string
     */
    public $multiPatriarchStudentRatio;

    /**
     * @description 学校数量
     * @var string
     */
    public $schoolCntStd;

    /**
     * @description 学生数量
     * @var string
     */
    public $studentCntStd;

    /**
     * @description 学校类型
     * @var string
     */
    public $schoolType;

    /**
     * @description 双家长监管学生比率
     * @var string
     */
    public $twoPatriarchStudentRatio;

    /**
     * @description 数字化教师数量
     * @var string
     */
    public $authTeacherCntStd;

    /**
     * @description 双家长监管学生数
     * @var string
     */
    public $twoPatriarchStudentCnt;

    /**
     * @description 学校id
     * @var string
     */
    public $corpId;

    /**
     * @description 单家长监管学生比率
     * @var string
     */
    public $singlePatriarchStudentRatio;

    /**
     * @description 多家长监管学生数
     * @var string
     */
    public $multiPatriarchStudentCnt;

    /**
     * @description 统计日期
     * @var string
     */
    public $statDate;

    /**
     * @description 班级数量
     * @var string
     */
    public $classCntStd;

    /**
     * @description 家长数量
     * @var string
     */
    public $patriarchCntStd;

    /**
     * @description 单家长监管学生数
     * @var string
     */
    public $singlePatriarchStudentCnt;

    /**
     * @description 教师数量
     * @var string
     */
    public $teacherCntStd;

}
