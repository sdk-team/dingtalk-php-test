<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduClassStudentParams;

use AlibabaCloud\Tea\Model;

class studentParam extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'studentIds' => 'student_ids',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->studentIds) {
            $res['student_ids'] = $this->studentIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return studentParam
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['student_ids'])){
            if(!empty($map['student_ids'])){
                $model->studentIds = $map['student_ids'];
            }
        }
        return $model;
    }
    /**
     * @description 班级ID
     * @var string
     */
    public $classId;

    /**
     * @description 学生列表
     * @var array
     */
    public $studentIds;

}
