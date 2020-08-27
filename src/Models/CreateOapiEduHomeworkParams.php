<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiEduHomeworkParams\selectClass;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiEduHomeworkParams\selectStu;

class CreateOapiEduHomeworkParams extends Model {
    protected $_name = [
        'hwMedia' => 'hw_media',
        'hwContent' => 'hw_content',
        'hwTitle' => 'hw_title',
        'courseName' => 'course_name',
        'hwPhoto' => 'hw_photo',
        'hwVideo' => 'hw_video',
        'teacherName' => 'teacher_name',
        'teacherUserid' => 'teacher_userid',
        'selectClass' => 'select_class',
        'selectStu' => 'select_stu',
        'identifier' => 'identifier',
        'attributes' => 'attributes',
        'targetRole' => 'target_role',
        'bizCode' => 'biz_code',
        'status' => 'status',
        'scheduledRelease' => 'scheduled_release',
        'scheduledTime' => 'scheduled_time',
    ];
    public function validate() {
        Model::validateRequired('hwContent', $this->hwContent, true);
        Model::validateRequired('hwTitle', $this->hwTitle, true);
        Model::validateRequired('courseName', $this->courseName, true);
        Model::validateRequired('teacherName', $this->teacherName, true);
        Model::validateRequired('teacherUserid', $this->teacherUserid, true);
        Model::validateRequired('identifier', $this->identifier, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->hwMedia) {
            $res['hw_media'] = $this->hwMedia;
        }
        if (null !== $this->hwContent) {
            $res['hw_content'] = $this->hwContent;
        }
        if (null !== $this->hwTitle) {
            $res['hw_title'] = $this->hwTitle;
        }
        if (null !== $this->courseName) {
            $res['course_name'] = $this->courseName;
        }
        if (null !== $this->hwPhoto) {
            $res['hw_photo'] = $this->hwPhoto;
        }
        if (null !== $this->hwVideo) {
            $res['hw_video'] = $this->hwVideo;
        }
        if (null !== $this->teacherName) {
            $res['teacher_name'] = $this->teacherName;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        if (null !== $this->selectClass) {
            $res['select_class'] = [];
            if(null !== $this->selectClass && is_array($this->selectClass)){
                $n = 0;
                foreach($this->selectClass as $item){
                    $res['select_class'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selectStu) {
            $res['select_stu'] = [];
            if(null !== $this->selectStu && is_array($this->selectStu)){
                $n = 0;
                foreach($this->selectStu as $item){
                    $res['select_stu'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->targetRole) {
            $res['target_role'] = $this->targetRole;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->scheduledRelease) {
            $res['scheduled_release'] = $this->scheduledRelease;
        }
        if (null !== $this->scheduledTime) {
            $res['scheduled_time'] = $this->scheduledTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiEduHomeworkParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['hw_media'])){
            $model->hwMedia = $map['hw_media'];
        }
        if(isset($map['hw_content'])){
            $model->hwContent = $map['hw_content'];
        }
        if(isset($map['hw_title'])){
            $model->hwTitle = $map['hw_title'];
        }
        if(isset($map['course_name'])){
            $model->courseName = $map['course_name'];
        }
        if(isset($map['hw_photo'])){
            $model->hwPhoto = $map['hw_photo'];
        }
        if(isset($map['hw_video'])){
            $model->hwVideo = $map['hw_video'];
        }
        if(isset($map['teacher_name'])){
            $model->teacherName = $map['teacher_name'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        if(isset($map['select_class'])){
            if(!empty($map['select_class'])){
                $model->selectClass = [];
                $n = 0;
                foreach($map['select_class'] as $item) {
                    $model->selectClass[$n++] = null !== $item ? selectClass::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['select_stu'])){
            if(!empty($map['select_stu'])){
                $model->selectStu = [];
                $n = 0;
                foreach($map['select_stu'] as $item) {
                    $model->selectStu[$n++] = null !== $item ? selectStu::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['identifier'])){
            $model->identifier = $map['identifier'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        if(isset($map['target_role'])){
            $model->targetRole = $map['target_role'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['scheduled_release'])){
            $model->scheduledRelease = $map['scheduled_release'];
        }
        if(isset($map['scheduled_time'])){
            $model->scheduledTime = $map['scheduled_time'];
        }
        return $model;
    }
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
     * @description 作业标题
     * @var string
     */
    public $hwTitle;

    /**
     * @description 作业课程名称
     * @var string
     */
    public $courseName;

    /**
     * @description 作业图片
     * @var string
     */
    public $hwPhoto;

    /**
     * @description 作业录音
     * @var string
     */
    public $hwVideo;

    /**
     * @description 老师名称
     * @var string
     */
    public $teacherName;

    /**
     * @description 老师userid
     * @var string
     */
    public $teacherUserid;

    /**
     * @description 选择的布置班级
     * @var array
     */
    public $selectClass;

    /**
     * @description 选择班级对应学生
     * @var array
     */
    public $selectStu;

    /**
     * @description 幂等ID字段
     * @var string
     */
    public $identifier;

    /**
     * @description 扩展属性
     * @var string
     */
    public $attributes;

    /**
     * @description 发送对象
     * @var string
     */
    public $targetRole;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

    /**
     * @description 状态
     * @var string
     */
    public $status;

    /**
     * @description 是否开始定时调度
     * @var string
     */
    public $scheduledRelease;

    /**
     * @description 定时调度时间
     * @var string
     */
    public $scheduledTime;

}
