<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduTeacherResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'gradeId' => 'grade_id',
        'campusId' => 'campus_id',
        'isAdviser' => 'is_adviser',
        'teacherName' => 'teacher_name',
        'classId' => 'class_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->gradeId) {
            $res['grade_id'] = $this->gradeId;
        }
        if (null !== $this->campusId) {
            $res['campus_id'] = $this->campusId;
        }
        if (null !== $this->isAdviser) {
            $res['is_adviser'] = $this->isAdviser;
        }
        if (null !== $this->teacherName) {
            $res['teacher_name'] = $this->teacherName;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['grade_id'])){
            $model->gradeId = $map['grade_id'];
        }
        if(isset($map['campus_id'])){
            $model->campusId = $map['campus_id'];
        }
        if(isset($map['is_adviser'])){
            $model->isAdviser = $map['is_adviser'];
        }
        if(isset($map['teacher_name'])){
            $model->teacherName = $map['teacher_name'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        return $model;
    }
    /**
     * @description 年级ID
     * @var int
     */
    public $gradeId;

    /**
     * @description 校区ID
     * @var int
     */
    public $campusId;

    /**
     * @description 是否为班主任，1是，0不是
     * @var int
     */
    public $isAdviser;

    /**
     * @description 老师名称
     * @var string
     */
    public $teacherName;

    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

}
