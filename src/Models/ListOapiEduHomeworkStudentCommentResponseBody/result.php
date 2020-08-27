<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduHomeworkStudentCommentResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'studentId' => 'student_id',
        'teacherId' => 'teacher_id',
        'teacherName' => 'teacher_name',
        'studentName' => 'student_name',
        'photo' => 'photo',
        'comment' => 'comment',
        'attributes' => 'attributes',
        'media' => 'media',
        'video' => 'video',
        'commentTime' => 'comment_time',
        'commentId' => 'comment_id',
    ];
    public function validate() {
        Model::validatePattern('commentTime', $this->commentTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->studentId) {
            $res['student_id'] = $this->studentId;
        }
        if (null !== $this->teacherId) {
            $res['teacher_id'] = $this->teacherId;
        }
        if (null !== $this->teacherName) {
            $res['teacher_name'] = $this->teacherName;
        }
        if (null !== $this->studentName) {
            $res['student_name'] = $this->studentName;
        }
        if (null !== $this->photo) {
            $res['photo'] = $this->photo;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->media) {
            $res['media'] = $this->media;
        }
        if (null !== $this->video) {
            $res['video'] = $this->video;
        }
        if (null !== $this->commentTime) {
            $res['comment_time'] = $this->commentTime;
        }
        if (null !== $this->commentId) {
            $res['comment_id'] = $this->commentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['student_id'])){
            $model->studentId = $map['student_id'];
        }
        if(isset($map['teacher_id'])){
            $model->teacherId = $map['teacher_id'];
        }
        if(isset($map['teacher_name'])){
            $model->teacherName = $map['teacher_name'];
        }
        if(isset($map['student_name'])){
            $model->studentName = $map['student_name'];
        }
        if(isset($map['photo'])){
            $model->photo = $map['photo'];
        }
        if(isset($map['comment'])){
            $model->comment = $map['comment'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        if(isset($map['media'])){
            $model->media = $map['media'];
        }
        if(isset($map['video'])){
            $model->video = $map['video'];
        }
        if(isset($map['comment_time'])){
            $model->commentTime = $map['comment_time'];
        }
        if(isset($map['comment_id'])){
            $model->commentId = $map['comment_id'];
        }
        return $model;
    }
    /**
     * @description 学生ID
     * @var string
     */
    public $studentId;

    /**
     * @description 老师ID
     * @var string
     */
    public $teacherId;

    /**
     * @description 老师姓名
     * @var string
     */
    public $teacherName;

    /**
     * @description 学生姓名
     * @var string
     */
    public $studentName;

    /**
     * @description 图片
     * @var string
     */
    public $photo;

    /**
     * @description 评论内容
     * @var string
     */
    public $comment;

    /**
     * @description 扩展属性
     * @var string
     */
    public $attributes;

    /**
     * @description 视频
     * @var string
     */
    public $media;

    /**
     * @description 音频
     * @var string
     */
    public $video;

    /**
     * @description 评论时间
     * @var string
     */
    public $commentTime;

    /**
     * @description 评论ID
     * @var int
     */
    public $commentId;

}
