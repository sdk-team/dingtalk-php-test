<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduHomeworkStudentCommentParams extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'hwId' => 'hw_id',
        'studentId' => 'student_id',
        'teacherUserid' => 'teacher_userid',
        'bizCode' => 'biz_code',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('hwId', $this->hwId, true);
        Model::validateRequired('studentId', $this->studentId, true);
        Model::validateRequired('teacherUserid', $this->teacherUserid, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->hwId) {
            $res['hw_id'] = $this->hwId;
        }
        if (null !== $this->studentId) {
            $res['student_id'] = $this->studentId;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduHomeworkStudentCommentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['hw_id'])){
            $model->hwId = $map['hw_id'];
        }
        if(isset($map['student_id'])){
            $model->studentId = $map['student_id'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        return $model;
    }
    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

    /**
     * @description 作业ID
     * @var int
     */
    public $hwId;

    /**
     * @description 学生ID
     * @var string
     */
    public $studentId;

    /**
     * @description 老师userID
     * @var string
     */
    public $teacherUserid;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

}
