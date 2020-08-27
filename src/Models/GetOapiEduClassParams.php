<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduClassParams extends Model {
    protected $_name = [
        'classId' => 'class_id',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduClassParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        return $model;
    }
    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

}
