<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiEduCourseParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'teacherCorpid' => 'teacher_corpid',
        'teacherUserid' => 'teacher_userid',
        'introduce' => 'introduce',
        'bizKey' => 'biz_key',
        'name' => 'name',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
    ];
    public function validate() {
        Model::validateRequired('opUserid', $this->opUserid, true);
        Model::validateRequired('teacherCorpid', $this->teacherCorpid, true);
        Model::validateRequired('teacherUserid', $this->teacherUserid, true);
        Model::validateRequired('introduce', $this->introduce, true);
        Model::validateRequired('bizKey', $this->bizKey, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateMaxLength('introduce', $this->introduce, 120);
        Model::validateMaxLength('bizKey', $this->bizKey, 64);
        Model::validateMaxLength('name', $this->name, 64);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
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
        if (null !== $this->bizKey) {
            $res['biz_key'] = $this->bizKey;
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
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiEduCourseParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
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
        if(isset($map['biz_key'])){
            $model->bizKey = $map['biz_key'];
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
        return $model;
    }
    /**
     * @description 当前用户ID
     * @var string
     */
    public $opUserid;

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
     * @description 业务唯一键，用于保证课程的唯一性，防止重复创建
     * @var string
     */
    public $bizKey;

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

}
