<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduUserParams extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'role' => 'role',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 班级id
     * @var int
     */
    public $classId;

    /**
     * @description 身份
     * @var string
     */
    public $role;

    /**
     * @description 人员id
     * @var string
     */
    public $userid;

}
