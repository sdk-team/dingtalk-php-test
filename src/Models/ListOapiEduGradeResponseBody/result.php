<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduGradeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'gradeId' => 'grade_id',
        'gradeLevel' => 'grade_level',
        'startYear' => 'start_year',
        'campusId' => 'campus_id',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->gradeId) {
            $res['grade_id'] = $this->gradeId;
        }
        if (null !== $this->gradeLevel) {
            $res['grade_level'] = $this->gradeLevel;
        }
        if (null !== $this->startYear) {
            $res['start_year'] = $this->startYear;
        }
        if (null !== $this->campusId) {
            $res['campus_id'] = $this->campusId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['grade_id'])){
            $model->gradeId = $map['grade_id'];
        }
        if(isset($map['grade_level'])){
            $model->gradeLevel = $map['grade_level'];
        }
        if(isset($map['start_year'])){
            $model->startYear = $map['start_year'];
        }
        if(isset($map['campus_id'])){
            $model->campusId = $map['campus_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 年级ID
     * @var int
     */
    public $gradeId;

    /**
     * @description 年级级数（一年级为1，二年级为2）
     * @var int
     */
    public $gradeLevel;

    /**
     * @description 入学年份
     * @var string
     */
    public $startYear;

    /**
     * @description 校区ID
     * @var int
     */
    public $campusId;

    /**
     * @description 年级名称
     * @var string
     */
    public $name;

}
