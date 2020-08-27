<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiEduHomeworkUserRoleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'teacher' => 'teacher',
        'student' => 'student',
        'headmaster' => 'headmaster',
        'students' => 'students',
        'guardian' => 'guardian',
        'userRole' => 'user_role',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->teacher) {
            $res['teacher'] = $this->teacher;
        }
        if (null !== $this->student) {
            $res['student'] = $this->student;
        }
        if (null !== $this->headmaster) {
            $res['headmaster'] = $this->headmaster;
        }
        if (null !== $this->students) {
            $res['students'] = $this->students;
        }
        if (null !== $this->guardian) {
            $res['guardian'] = $this->guardian;
        }
        if (null !== $this->userRole) {
            $res['user_role'] = $this->userRole;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['teacher'])){
            $model->teacher = $map['teacher'];
        }
        if(isset($map['student'])){
            $model->student = $map['student'];
        }
        if(isset($map['headmaster'])){
            $model->headmaster = $map['headmaster'];
        }
        if(isset($map['students'])){
            if(!empty($map['students'])){
                $model->students = $map['students'];
            }
        }
        if(isset($map['guardian'])){
            $model->guardian = $map['guardian'];
        }
        if(isset($map['user_role'])){
            $model->userRole = $map['user_role'];
        }
        return $model;
    }
    /**
     * @description 是否老师
     * @var bool
     */
    public $teacher;

    /**
     * @description 是否学生
     * @var bool
     */
    public $student;

    /**
     * @description 是否班主任
     * @var bool
     */
    public $headmaster;

    /**
     * @description 学生列表
     * @var array
     */
    public $students;

    /**
     * @description 是否家长
     * @var bool
     */
    public $guardian;

    /**
     * @description 用户角色
     * @var string
     */
    public $userRole;

}
