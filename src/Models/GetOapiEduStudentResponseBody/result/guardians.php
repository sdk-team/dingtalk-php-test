<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduStudentResponseBody\result;

use AlibabaCloud\Tea\Model;

class guardians extends Model {
    protected $_name = [
        'guardianUserid' => 'guardian_userid',
        'relation' => 'relation',
        'nick' => 'nick',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->guardianUserid) {
            $res['guardian_userid'] = $this->guardianUserid;
        }
        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return guardians
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['guardian_userid'])){
            $model->guardianUserid = $map['guardian_userid'];
        }
        if(isset($map['relation'])){
            $model->relation = $map['relation'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        return $model;
    }
    /**
     * @description 家长ID
     * @var string
     */
    public $guardianUserid;

    /**
     * @description 关系
     * @var string
     */
    public $relation;

    /**
     * @description 别名
     * @var string
     */
    public $nick;

}
