<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduGuardianParams extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'guardianUserid' => 'guardian_userid',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('guardianUserid', $this->guardianUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->guardianUserid) {
            $res['guardian_userid'] = $this->guardianUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduGuardianParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['guardian_userid'])){
            $model->guardianUserid = $map['guardian_userid'];
        }
        return $model;
    }
    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

    /**
     * @description 家长ID
     * @var string
     */
    public $guardianUserid;

}
