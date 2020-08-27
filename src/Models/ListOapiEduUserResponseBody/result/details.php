<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduUserResponseBody\result;

use AlibabaCloud\Tea\Model;

class details extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'role' => 'role',
        'feature' => 'feature',
        'name' => 'name',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->feature) {
            $res['feature'] = $this->feature;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return details
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['feature'])){
            $model->feature = $map['feature'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
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
     * @description 角色
     * @var string
     */
    public $role;

    /**
     * @description 人员各个身份属性
     * @var string
     */
    public $feature;

    /**
     * @description 在班级中的监护人名
     * @var string
     */
    public $name;

    /**
     * @description 人员id
     * @var string
     */
    public $userid;

}
