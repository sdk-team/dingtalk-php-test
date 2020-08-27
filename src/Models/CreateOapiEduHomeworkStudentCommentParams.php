<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiEduHomeworkStudentCommentParams extends Model {
    protected $_name = [
        'video' => 'video',
        'comment' => 'comment',
        'teacherUserid' => 'teacher_userid',
        'studentName' => 'student_name',
        'media' => 'media',
        'photo' => 'photo',
        'attributes' => 'attributes',
        'bizCode' => 'biz_code',
        'classId' => 'class_id',
        'hwId' => 'hw_id',
        'studentId' => 'student_id',
    ];
    public function validate() {
        Model::validateRequired('teacherUserid', $this->teacherUserid, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('hwId', $this->hwId, true);
        Model::validateRequired('studentId', $this->studentId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->video) {
            $res['video'] = $this->video;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        if (null !== $this->studentName) {
            $res['student_name'] = $this->studentName;
        }
        if (null !== $this->media) {
            $res['media'] = $this->media;
        }
        if (null !== $this->photo) {
            $res['photo'] = $this->photo;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->hwId) {
            $res['hw_id'] = $this->hwId;
        }
        if (null !== $this->studentId) {
            $res['student_id'] = $this->studentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiEduHomeworkStudentCommentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['video'])){
            $model->video = $map['video'];
        }
        if(isset($map['comment'])){
            $model->comment = $map['comment'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        if(isset($map['student_name'])){
            $model->studentName = $map['student_name'];
        }
        if(isset($map['media'])){
            $model->media = $map['media'];
        }
        if(isset($map['photo'])){
            $model->photo = $map['photo'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['hw_id'])){
            $model->hwId = $map['hw_id'];
        }
        if(isset($map['student_id'])){
            $model->studentId = $map['student_id'];
        }
        return $model;
    }
    /**
     * @description 老师评论语音
     * @var string
     */
    public $video;

    /**
     * @description 评论
     * @var string
     */
    public $comment;

    /**
     * @description 老师UserId
     * @var string
     */
    public $teacherUserid;

    /**
     * @description 学生姓名
     * @var string
     */
    public $studentName;

    /**
     * @description 老师评论视频
     * @var string
     */
    public $media;

    /**
     * @description 老师评论图片
     * @var string
     */
    public $photo;

    /**
     * @description 属性参数
     * @var string
     */
    public $attributes;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

    /**
     * @description 班级ID
     * @var string
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

}
