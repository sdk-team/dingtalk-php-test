<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiEduCourseParams extends Model {
    protected $_name = [
        'courseCode' => 'course_code',
        'teacherCorpid' => 'teacher_corpid',
        'teacherUserid' => 'teacher_userid',
        'introduce' => 'introduce',
        'name' => 'name',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'opUserid' => 'op_userid',
    ];
    public function validate() {
        Model::validateRequired('courseCode', $this->courseCode, true);
        Model::validateRequired('opUserid', $this->opUserid, true);
        Model::validateMaxLength('introduce', $this->introduce, 120);
        Model::validateMaxLength('name', $this->name, 64);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->courseCode) {
            $res['course_code'] = $this->courseCode;
        }
        if (null !== $this->teacherCorpid) {
            $res['teacher_corpid'] = $this->teacherCorpid;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        if (null !== $this->introduce) {
            $res['introduce'] = $this->introduce;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiEduCourseParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['course_code'])){
            $model->courseCode = $map['course_code'];
        }
        if(isset($map['teacher_corpid'])){
            $model->teacherCorpid = $map['teacher_corpid'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        if(isset($map['introduce'])){
            $model->introduce = $map['introduce'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        return $model;
    }
    /**
     * @description 课程唯一编码
     * @var string
     */
    public $courseCode;

    /**
     * @description 老师的组织CorpId
     * @var string
     */
    public $teacherCorpid;

    /**
     * @description 老师的用户ID
     * @var string
     */
    public $teacherUserid;

    /**
     * @description 课程介绍
     * @var string
     */
    public $introduce;

    /**
     * @description 课程名称
     * @var string
     */
    public $name;

    /**
     * @description 课程的开始时间，Unix毫秒时间戳
     * @var int
     */
    public $startTime;

    /**
     * @description 课程的结束时间，Unix毫秒时间戳
     * @var int
     */
    public $endTime;

    /**
     * @description 当前用户ID
     * @var string
     */
    public $opUserid;

}
