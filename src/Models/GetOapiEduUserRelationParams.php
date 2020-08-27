<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduUserRelationParams extends Model {
    protected $_name = [
        'fromUserid' => 'from_userid',
        'classId' => 'class_id',
    ];
    public function validate() {
        Model::validateRequired('fromUserid', $this->fromUserid, true);
        Model::validateRequired('classId', $this->classId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->fromUserid) {
            $res['from_userid'] = $this->fromUserid;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduUserRelationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['from_userid'])){
            $model->fromUserid = $map['from_userid'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        return $model;
    }
    /**
     * @description 监护人id
     * @var string
     */
    public $fromUserid;

    /**
     * @description 班级id
     * @var int
     */
    public $classId;

}
