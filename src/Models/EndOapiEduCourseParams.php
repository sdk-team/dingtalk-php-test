<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class EndOapiEduCourseParams extends Model {
    protected $_name = [
        'courseCode' => 'course_code',
        'opUserId' => 'op_user_id',
    ];
    public function validate() {
        Model::validateRequired('courseCode', $this->courseCode, true);
        Model::validateRequired('opUserId', $this->opUserId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->courseCode) {
            $res['course_code'] = $this->courseCode;
        }
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return EndOapiEduCourseParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['course_code'])){
            $model->courseCode = $map['course_code'];
        }
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        return $model;
    }
    /**
     * @description 需要结束的课程编码
     * @var string
     */
    public $courseCode;

    /**
     * @description 操作用户id
     * @var string
     */
    public $opUserId;

}
