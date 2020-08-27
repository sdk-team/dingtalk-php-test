<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiEduHomeworkStudentCommentParams extends Model {
    protected $_name = [
        'teacherUserid' => 'teacher_userid',
        'studentName' => 'student_name',
        'studentId' => 'student_id',
        'commentId' => 'comment_id',
        'hwId' => 'hw_id',
        'classId' => 'class_id',
        'comment' => 'comment',
        'video' => 'video',
        'media' => 'media',
        'photo' => 'photo',
        'bizCode' => 'biz_code',
        'attributes' => 'attributes',
    ];
    public function validate() {
        Model::validateRequired('teacherUserid', $this->teacherUserid, true);
        Model::validateRequired('studentId', $this->studentId, true);
        Model::validateRequired('commentId', $this->commentId, true);
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        if (null !== $this->studentName) {
            $res['student_name'] = $this->studentName;
        }
        if (null !== $this->studentId) {
            $res['student_id'] = $this->studentId;
        }
        if (null !== $this->commentId) {
            $res['comment_id'] = $this->commentId;
        }
        if (null !== $this->hwId) {
            $res['hw_id'] = $this->hwId;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->video) {
            $res['video'] = $this->video;
        }
        if (null !== $this->media) {
            $res['media'] = $this->media;
        }
        if (null !== $this->photo) {
            $res['photo'] = $this->photo;
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
     * @return UpdateOapiEduHomeworkStudentCommentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        if(isset($map['student_name'])){
            $model->studentName = $map['student_name'];
        }
        if(isset($map['student_id'])){
            $model->studentId = $map['student_id'];
        }
        if(isset($map['comment_id'])){
            $model->commentId = $map['comment_id'];
        }
        if(isset($map['hw_id'])){
            $model->hwId = $map['hw_id'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['comment'])){
            $model->comment = $map['comment'];
        }
        if(isset($map['video'])){
            $model->video = $map['video'];
        }
        if(isset($map['media'])){
            $model->media = $map['media'];
        }
        if(isset($map['photo'])){
            $model->photo = $map['photo'];
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
     * @description 学生ID
     * @var string
     */
    public $studentId;

    /**
     * @description 评论ID
     * @var int
     */
    public $commentId;

    /**
     * @description 作业ID
     * @var int
     */
    public $hwId;

    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

    /**
     * @description 评论内容
     * @var string
     */
    public $comment;

    /**
     * @description 音频
     * @var string
     */
    public $video;

    /**
     * @description 视频
     * @var string
     */
    public $media;

    /**
     * @description 图片
     * @var string
     */
    public $photo;

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
