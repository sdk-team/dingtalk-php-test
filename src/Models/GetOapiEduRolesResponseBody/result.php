<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduRolesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'advisor' => 'advisor',
        'teacher' => 'teacher',
        'student' => 'student',
        'guardian' => 'guardian',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->advisor) {
            $res['advisor'] = $this->advisor;
        }
        if (null !== $this->teacher) {
            $res['teacher'] = $this->teacher;
        }
        if (null !== $this->student) {
            $res['student'] = $this->student;
        }
        if (null !== $this->guardian) {
            $res['guardian'] = $this->guardian;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['advisor'])){
            if(!empty($map['advisor'])){
                $model->advisor = $map['advisor'];
            }
        }
        if(isset($map['teacher'])){
            if(!empty($map['teacher'])){
                $model->teacher = $map['teacher'];
            }
        }
        if(isset($map['student'])){
            if(!empty($map['student'])){
                $model->student = $map['student'];
            }
        }
        if(isset($map['guardian'])){
            if(!empty($map['guardian'])){
                $model->guardian = $map['guardian'];
            }
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 非NULL列表;此员工在当前家校通讯录中的是班主任角色的班级列表
     * @var array
     */
    public $advisor;

    /**
     * @description 非NULL列表;此员工在当前家校通讯录中的是老师角色的班级列表
     * @var array
     */
    public $teacher;

    /**
     * @description 非NULL列表;此员工在当前家校通讯录中的是学生角色的班级列表
     * @var array
     */
    public $student;

    /**
     * @description 非NULL列表;此员工在当前家校通讯录中的是监护人角色的班级列表
     * @var array
     */
    public $guardian;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

}
