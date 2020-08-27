<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiEduHomeworkResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'hwTitle' => 'hw_title',
        'hwMedia' => 'hw_media',
        'hwContent' => 'hw_content',
        'hwPhoto' => 'hw_photo',
        'scheduledTime' => 'scheduled_time',
        'teacherId' => 'teacher_id',
        'hwStatus' => 'hw_status',
        'teacherName' => 'teacher_name',
        'hwVideo' => 'hw_video',
        'attributes' => 'attributes',
        'scheduledRelease' => 'scheduled_release',
        'sendTime' => 'send_time',
    ];
    public function validate() {
        Model::validatePattern('sendTime', $this->sendTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->hwTitle) {
            $res['hw_title'] = $this->hwTitle;
        }
        if (null !== $this->hwMedia) {
            $res['hw_media'] = $this->hwMedia;
        }
        if (null !== $this->hwContent) {
            $res['hw_content'] = $this->hwContent;
        }
        if (null !== $this->hwPhoto) {
            $res['hw_photo'] = $this->hwPhoto;
        }
        if (null !== $this->scheduledTime) {
            $res['scheduled_time'] = $this->scheduledTime;
        }
        if (null !== $this->teacherId) {
            $res['teacher_id'] = $this->teacherId;
        }
        if (null !== $this->hwStatus) {
            $res['hw_status'] = $this->hwStatus;
        }
        if (null !== $this->teacherName) {
            $res['teacher_name'] = $this->teacherName;
        }
        if (null !== $this->hwVideo) {
            $res['hw_video'] = $this->hwVideo;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->scheduledRelease) {
            $res['scheduled_release'] = $this->scheduledRelease;
        }
        if (null !== $this->sendTime) {
            $res['send_time'] = $this->sendTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['hw_title'])){
            $model->hwTitle = $map['hw_title'];
        }
        if(isset($map['hw_media'])){
            $model->hwMedia = $map['hw_media'];
        }
        if(isset($map['hw_content'])){
            $model->hwContent = $map['hw_content'];
        }
        if(isset($map['hw_photo'])){
            $model->hwPhoto = $map['hw_photo'];
        }
        if(isset($map['scheduled_time'])){
            $model->scheduledTime = $map['scheduled_time'];
        }
        if(isset($map['teacher_id'])){
            $model->teacherId = $map['teacher_id'];
        }
        if(isset($map['hw_status'])){
            $model->hwStatus = $map['hw_status'];
        }
        if(isset($map['teacher_name'])){
            $model->teacherName = $map['teacher_name'];
        }
        if(isset($map['hw_video'])){
            $model->hwVideo = $map['hw_video'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        if(isset($map['scheduled_release'])){
            $model->scheduledRelease = $map['scheduled_release'];
        }
        if(isset($map['send_time'])){
            $model->sendTime = $map['send_time'];
        }
        return $model;
    }
    /**
     * @description 作业标题
     * @var string
     */
    public $hwTitle;

    /**
     * @description 作业视频
     * @var string
     */
    public $hwMedia;

    /**
     * @description 作业内容
     * @var string
     */
    public $hwContent;

    /**
     * @description 作业图片
     * @var string
     */
    public $hwPhoto;

    /**
     * @description 定时发送事件
     * @var string
     */
    public $scheduledTime;

    /**
     * @description 老师ID
     * @var string
     */
    public $teacherId;

    /**
     * @description 作业状态
     * @var string
     */
    public $hwStatus;

    /**
     * @description 老师姓名
     * @var string
     */
    public $teacherName;

    /**
     * @description 作业录音
     * @var string
     */
    public $hwVideo;

    /**
     * @description 扩展属性
     * @var string
     */
    public $attributes;

    /**
     * @description 是否定时作业
     * @var string
     */
    public $scheduledRelease;

    /**
     * @description 发送时间
     * @var string
     */
    public $sendTime;

}
