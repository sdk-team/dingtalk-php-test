<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduCourseResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'bizKey' => 'biz_key',
        'teacherUserid' => 'teacher_userid',
        'teacherCorpid' => 'teacher_corpid',
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'introduce' => 'introduce',
        'name' => 'name',
        'code' => 'code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bizKey) {
            $res['biz_key'] = $this->bizKey;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        if (null !== $this->teacherCorpid) {
            $res['teacher_corpid'] = $this->teacherCorpid;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->introduce) {
            $res['introduce'] = $this->introduce;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_key'])){
            $model->bizKey = $map['biz_key'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        if(isset($map['teacher_corpid'])){
            $model->teacherCorpid = $map['teacher_corpid'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['introduce'])){
            $model->introduce = $map['introduce'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        return $model;
    }
    /**
     * @description 业务唯一键
     * @var string
     */
    public $bizKey;

    /**
     * @description 老师的用户ID
     * @var string
     */
    public $teacherUserid;

    /**
     * @description 老的的组织CorpId
     * @var string
     */
    public $teacherCorpid;

    /**
     * @description 结束时间，Unix毫秒时间戳
     * @var int
     */
    public $endTime;

    /**
     * @description 开始时间，Unix毫秒时间戳
     * @var int
     */
    public $startTime;

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
     * @description 课程编码
     * @var string
     */
    public $code;

}
