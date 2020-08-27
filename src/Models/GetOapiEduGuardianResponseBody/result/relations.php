<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduGuardianResponseBody\result;

use AlibabaCloud\Tea\Model;

class relations extends Model {
    protected $_name = [
        'studentUserid' => 'student_userid',
        'nick' => 'nick',
        'relation' => 'relation',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->studentUserid) {
            $res['student_userid'] = $this->studentUserid;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return relations
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['student_userid'])){
            $model->studentUserid = $map['student_userid'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['relation'])){
            $model->relation = $map['relation'];
        }
        return $model;
    }
    /**
     * @description fafa\
     * @var string
     */
    public $studentUserid;

    /**
     * @description fafa\
     * @var string
     */
    public $nick;

    /**
     * @description fafa\
     * @var string
     */
    public $relation;

}
