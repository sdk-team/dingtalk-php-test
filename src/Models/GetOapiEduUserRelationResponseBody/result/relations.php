<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduUserRelationResponseBody\result;

use AlibabaCloud\Tea\Model;

class relations extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'relationName' => 'relation_name',
        'relationCode' => 'relation_code',
        'fromUserid' => 'from_userid',
        'toUserid' => 'to_userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->relationName) {
            $res['relation_name'] = $this->relationName;
        }
        if (null !== $this->relationCode) {
            $res['relation_code'] = $this->relationCode;
        }
        if (null !== $this->fromUserid) {
            $res['from_userid'] = $this->fromUserid;
        }
        if (null !== $this->toUserid) {
            $res['to_userid'] = $this->toUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return relations
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['relation_name'])){
            $model->relationName = $map['relation_name'];
        }
        if(isset($map['relation_code'])){
            $model->relationCode = $map['relation_code'];
        }
        if(isset($map['from_userid'])){
            $model->fromUserid = $map['from_userid'];
        }
        if(isset($map['to_userid'])){
            $model->toUserid = $map['to_userid'];
        }
        return $model;
    }
    /**
     * @description 班级id
     * @var int
     */
    public $classId;

    /**
     * @description 关系名
     * @var string
     */
    public $relationName;

    /**
     * @description 关系code
     * @var string
     */
    public $relationCode;

    /**
     * @description 监护人id
     * @var string
     */
    public $fromUserid;

    /**
     * @description 学生id
     * @var string
     */
    public $toUserid;

}
