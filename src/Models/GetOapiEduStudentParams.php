<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduStudentParams extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'studentUserid' => 'student_userid',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('studentUserid', $this->studentUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->studentUserid) {
            $res['student_userid'] = $this->studentUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduStudentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['student_userid'])){
            $model->studentUserid = $map['student_userid'];
        }
        return $model;
    }
    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

    /**
     * @description 学生ID
     * @var string
     */
    public $studentUserid;

}
