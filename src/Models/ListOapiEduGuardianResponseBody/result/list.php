<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduGuardianResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'relation' => 'relation',
        'guardianUserid' => 'guardian_userid',
        'studentUserid' => 'student_userid',
        'nick' => 'nick',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }
        if (null !== $this->guardianUserid) {
            $res['guardian_userid'] = $this->guardianUserid;
        }
        if (null !== $this->studentUserid) {
            $res['student_userid'] = $this->studentUserid;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['relation'])){
            $model->relation = $map['relation'];
        }
        if(isset($map['guardian_userid'])){
            $model->guardianUserid = $map['guardian_userid'];
        }
        if(isset($map['student_userid'])){
            $model->studentUserid = $map['student_userid'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        return $model;
    }
    /**
     * @description 关系（F爸爸、M妈妈、O其他）
     * @var string
     */
    public $relation;

    /**
     * @description 家长ID
     * @var string
     */
    public $guardianUserid;

    /**
     * @description 学生ID
     * @var string
     */
    public $studentUserid;

    /**
     * @description 关系名称
     * @var string
     */
    public $nick;

}
