<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduClassResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'gradeId' => 'grade_id',
        'periodId' => 'period_id',
        'campusId' => 'campus_id',
        'nick' => 'nick',
        'name' => 'name',
        'gradeLevel' => 'grade_level',
        'classLevel' => 'class_level',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
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
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->gradeLevel) {
            $res['grade_level'] = $this->gradeLevel;
        }
        if (null !== $this->classLevel) {
            $res['class_level'] = $this->classLevel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
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
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['grade_level'])){
            $model->gradeLevel = $map['grade_level'];
        }
        if(isset($map['class_level'])){
            $model->classLevel = $map['class_level'];
        }
        return $model;
    }
    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

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
     * @description 别名
     * @var string
     */
    public $nick;

    /**
     * @description 班级名称
     * @var string
     */
    public $name;

    /**
     * @description 年级级数（一年级为1，二年级为2）
     * @var int
     */
    public $gradeLevel;

    /**
     * @description 每个年级下班级级数（1班为1,2班为2）
     * @var int
     */
    public $classLevel;

}
