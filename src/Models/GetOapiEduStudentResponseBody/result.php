<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduStudentResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduStudentResponseBody\result\guardians;

class result extends Model {
    protected $_name = [
        'name' => 'name',
        'classId' => 'class_id',
        'gradeId' => 'grade_id',
        'periodId' => 'period_id',
        'campusId' => 'campus_id',
        'guardians' => 'guardians',
        'studentNo' => 'student_no',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
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
        if (null !== $this->guardians) {
            $res['guardians'] = [];
            if(null !== $this->guardians && is_array($this->guardians)){
                $n = 0;
                foreach($this->guardians as $item){
                    $res['guardians'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->studentNo) {
            $res['student_no'] = $this->studentNo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
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
        if(isset($map['guardians'])){
            if(!empty($map['guardians'])){
                $model->guardians = [];
                $n = 0;
                foreach($map['guardians'] as $item) {
                    $model->guardians[$n++] = null !== $item ? guardians::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['student_no'])){
            $model->studentNo = $map['student_no'];
        }
        return $model;
    }
    /**
     * @description 名称
     * @var string
     */
    public $name;

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
     * @description guardians
     * @var array
     */
    public $guardians;

    /**
     * @description 学号
     * @var string
     */
    public $studentNo;

}
