<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiEduHomeworkParams;

use AlibabaCloud\Tea\Model;

class selectClass extends Model {
    protected $_name = [
        'className' => 'class_name',
        'classId' => 'class_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->className) {
            $res['class_name'] = $this->className;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return selectClass
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_name'])){
            $model->className = $map['class_name'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        return $model;
    }
    /**
     * @description 班级名称
     * @var string
     */
    public $className;

    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

}
