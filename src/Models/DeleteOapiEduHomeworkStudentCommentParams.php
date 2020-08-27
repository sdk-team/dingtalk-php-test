<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiEduHomeworkStudentCommentParams extends Model {
    protected $_name = [
        'studentId' => 'student_id',
        'classId' => 'class_id',
        'hwId' => 'hw_id',
        'teacherUserid' => 'teacher_userid',
        'commentId' => 'comment_id',
        'bizCode' => 'biz_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->studentId) {
            $res['student_id'] = $this->studentId;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->hwId) {
            $res['hw_id'] = $this->hwId;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        if (null !== $this->commentId) {
            $res['comment_id'] = $this->commentId;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiEduHomeworkStudentCommentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['student_id'])){
            $model->studentId = $map['student_id'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['hw_id'])){
            $model->hwId = $map['hw_id'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        if(isset($map['comment_id'])){
            $model->commentId = $map['comment_id'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        return $model;
    }
    /**
     * @description 学生ID
     * @var string
     */
    public $studentId;

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
     * @description 老师UserID
     * @var string
     */
    public $teacherUserid;

    /**
     * @description 评论ID
     * @var int
     */
    public $commentId;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

}
