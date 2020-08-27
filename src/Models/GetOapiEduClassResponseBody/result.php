<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduClassResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'classLevel' => 'class_level',
        'gradeLevel' => 'grade_level',
        'gradeId' => 'grade_id',
        'periodId' => 'period_id',
        'campusId' => 'campus_id',
        'name' => 'name',
        'nick' => 'nick',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->classLevel) {
            $res['class_level'] = $this->classLevel;
        }
        if (null !== $this->gradeLevel) {
            $res['grade_level'] = $this->gradeLevel;
        }
        if (null !== $this->gradeId) {
            $res['grade_id'] = $this->gradeId;
        }
        if (null !== $this->periodId) {
            $res['period_id'] = $this->periodId;
        }
        if (null !== $this->campusId) {
            $res['campus_id'] = $this->campusId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_level'])){
            $model->classLevel = $map['class_level'];
        }
        if(isset($map['grade_level'])){
            $model->gradeLevel = $map['grade_level'];
        }
        if(isset($map['grade_id'])){
            $model->gradeId = $map['grade_id'];
        }
        if(isset($map['period_id'])){
            $model->periodId = $map['period_id'];
        }
        if(isset($map['campus_id'])){
            $model->campusId = $map['campus_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        return $model;
    }
    /**
     * @description 班级级数（1班为1，二班为2）
     * @var int
     */
    public $classLevel;

    /**
     * @description 年级级数（一年级为1，二年级为2）
     * @var int
     */
    public $gradeLevel;

    /**
     * @description 年级ID
     * @var int
     */
    public $gradeId;

    /**
     * @description 学段ID
     * @var int
     */
    public $periodId;

    /**
     * @description 校区ID
     * @var int
     */
    public $campusId;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 别名
     * @var string
     */
    public $nick;

}
