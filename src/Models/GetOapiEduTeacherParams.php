<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduTeacherParams extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'teacherUserid' => 'teacher_userid',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('teacherUserid', $this->teacherUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduTeacherParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        return $model;
    }
    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

    /**
     * @description 用户ID
     * @var string
     */
    public $teacherUserid;

}
