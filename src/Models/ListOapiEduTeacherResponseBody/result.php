<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduTeacherResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'periodId' => 'period_id',
        'gradeId' => 'grade_id',
        'isAdviser' => 'is_adviser',
        'campusId' => 'campus_id',
        'teacherName' => 'teacher_name',
        'teacherUserid' => 'teacher_userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->periodId) {
            $res['period_id'] = $this->periodId;
        }
        if (null !== $this->gradeId) {
            $res['grade_id'] = $this->gradeId;
        }
        if (null !== $this->isAdviser) {
            $res['is_adviser'] = $this->isAdviser;
        }
        if (null !== $this->campusId) {
            $res['campus_id'] = $this->campusId;
        }
        if (null !== $this->teacherName) {
            $res['teacher_name'] = $this->teacherName;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['period_id'])){
            $model->periodId = $map['period_id'];
        }
        if(isset($map['grade_id'])){
            $model->gradeId = $map['grade_id'];
        }
        if(isset($map['is_adviser'])){
            $model->isAdviser = $map['is_adviser'];
        }
        if(isset($map['campus_id'])){
            $model->campusId = $map['campus_id'];
        }
        if(isset($map['teacher_name'])){
            $model->teacherName = $map['teacher_name'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        return $model;
    }
    /**
     * @description 学段ID
     * @var int
     */
    public $periodId;

    /**
     * @description 年级ID
     * @var int
     */
    public $gradeId;

    /**
     * @description 是否为班主任，1是，0不是
     * @var int
     */
    public $isAdviser;

    /**
     * @description 校区ID
     * @var int
     */
    public $campusId;

    /**
     * @description 名称
     * @var string
     */
    public $teacherName;

    /**
     * @description 老师ID
     * @var string
     */
    public $teacherUserid;

}
