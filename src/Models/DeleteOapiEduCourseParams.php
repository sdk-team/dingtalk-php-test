<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiEduCourseParams extends Model {
    protected $_name = [
        'courseCode' => 'course_code',
        'opUserid' => 'op_userid',
    ];
    public function validate() {
        Model::validateRequired('courseCode', $this->courseCode, true);
        Model::validateRequired('opUserid', $this->opUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->courseCode) {
            $res['course_code'] = $this->courseCode;
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiEduCourseParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['course_code'])){
            $model->courseCode = $map['course_code'];
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        return $model;
    }
    /**
     * @description 课程编码
     * @var string
     */
    public $courseCode;

    /**
     * @description 当前操作人的用户ID
     * @var string
     */
    public $opUserid;

}
