<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SubmitOapiEduHomeworkStudentParams extends Model {
    protected $_name = [
        'media' => 'media',
        'photo' => 'photo',
        'content' => 'content',
        'title' => 'title',
        'studentName' => 'student_name',
        'submitorId' => 'submitor_id',
        'video' => 'video',
        'attributes' => 'attributes',
        'studentId' => 'student_id',
        'hwId' => 'hw_id',
        'classId' => 'class_id',
        'bizCode' => 'biz_code',
    ];
    public function validate() {
        Model::validateRequired('studentName', $this->studentName, true);
        Model::validateRequired('submitorId', $this->submitorId, true);
        Model::validateRequired('studentId', $this->studentId, true);
        Model::validateRequired('hwId', $this->hwId, true);
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->media) {
            $res['media'] = $this->media;
        }
        if (null !== $this->photo) {
            $res['photo'] = $this->photo;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->studentName) {
            $res['student_name'] = $this->studentName;
        }
        if (null !== $this->submitorId) {
            $res['submitor_id'] = $this->submitorId;
        }
        if (null !== $this->video) {
            $res['video'] = $this->video;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->studentId) {
            $res['student_id'] = $this->studentId;
        }
        if (null !== $this->hwId) {
            $res['hw_id'] = $this->hwId;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitOapiEduHomeworkStudentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['media'])){
            $model->media = $map['media'];
        }
        if(isset($map['photo'])){
            $model->photo = $map['photo'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['student_name'])){
            $model->studentName = $map['student_name'];
        }
        if(isset($map['submitor_id'])){
            $model->submitorId = $map['submitor_id'];
        }
        if(isset($map['video'])){
            $model->video = $map['video'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        if(isset($map['student_id'])){
            $model->studentId = $map['student_id'];
        }
        if(isset($map['hw_id'])){
            $model->hwId = $map['hw_id'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        return $model;
    }
    /**
     * @description 视频地址
     * @var string
     */
    public $media;

    /**
     * @description 图片地址
     * @var string
     */
    public $photo;

    /**
     * @description 内容
     * @var string
     */
    public $content;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 学生姓名
     * @var string
     */
    public $studentName;

    /**
     * @description 提交人ID
     * @var string
     */
    public $submitorId;

    /**
     * @description 音频地址
     * @var string
     */
    public $video;

    /**
     * @description 属性参数
     * @var string
     */
    public $attributes;

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
     * @description 班级ID
     * @var int
     */
    public $classId;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

}
