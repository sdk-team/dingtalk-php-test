<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RecordOapiEduHomeworkStudentTopicParams;

use AlibabaCloud\Tea\Model;

class studentAnswerDetails extends Model {
    protected $_name = [
        'spendTime' => 'spend_time',
        'isRight' => 'is_right',
        'questionId' => 'question_id',
        'classId' => 'class_id',
        'studentName' => 'student_name',
        'studentId' => 'student_id',
        'hwId' => 'hw_id',
        'redoTimes' => 'redo_times',
        'attributes' => 'attributes',
        'bizCode' => 'biz_code',
    ];
    public function validate() {
        Model::validateRequired('questionId', $this->questionId, true);
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('studentId', $this->studentId, true);
        Model::validateRequired('hwId', $this->hwId, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->spendTime) {
            $res['spend_time'] = $this->spendTime;
        }
        if (null !== $this->isRight) {
            $res['is_right'] = $this->isRight;
        }
        if (null !== $this->questionId) {
            $res['question_id'] = $this->questionId;
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
        if (null !== $this->redoTimes) {
            $res['redo_times'] = $this->redoTimes;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return studentAnswerDetails
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['spend_time'])){
            $model->spendTime = $map['spend_time'];
        }
        if(isset($map['is_right'])){
            $model->isRight = $map['is_right'];
        }
        if(isset($map['question_id'])){
            $model->questionId = $map['question_id'];
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
        if(isset($map['redo_times'])){
            $model->redoTimes = $map['redo_times'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        return $model;
    }
    /**
     * @description 做题时间
     * @var int
     */
    public $spendTime;

    /**
     * @description 是否答对
     * @var string
     */
    public $isRight;

    /**
     * @description 题目ID
     * @var string
     */
    public $questionId;

    /**
     * @description 班级ID
     * @var string
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
     * @description 做了多少次
     * @var int
     */
    public $redoTimes;

    /**
     * @description 扩展属性
     * @var string
     */
    public $attributes;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

}
