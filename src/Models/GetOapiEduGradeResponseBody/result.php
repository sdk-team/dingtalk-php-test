<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduGradeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'startYear' => 'start_year',
        'gradeLevel' => 'grade_level',
        'periodId' => 'period_id',
        'nick' => 'nick',
        'name' => 'name',
        'campusId' => 'campus_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->startYear) {
            $res['start_year'] = $this->startYear;
        }
        if (null !== $this->gradeLevel) {
            $res['grade_level'] = $this->gradeLevel;
        }
        if (null !== $this->periodId) {
            $res['period_id'] = $this->periodId;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->campusId) {
            $res['campus_id'] = $this->campusId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_year'])){
            $model->startYear = $map['start_year'];
        }
        if(isset($map['grade_level'])){
            $model->gradeLevel = $map['grade_level'];
        }
        if(isset($map['period_id'])){
            $model->periodId = $map['period_id'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['campus_id'])){
            $model->campusId = $map['campus_id'];
        }
        return $model;
    }
    /**
     * @description 入学年份
     * @var string
     */
    public $startYear;

    /**
     * @description 年级级数（一年级为1，二年级为2）
     * @var int
     */
    public $gradeLevel;

    /**
     * @description 学段ID
     * @var int
     */
    public $periodId;

    /**
     * @description 别名
     * @var string
     */
    public $nick;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 校区ID
     * @var int
     */
    public $campusId;

}
