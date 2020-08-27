<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduClassStudentParams\studentParam;

class GetOapiEduClassStudentParams extends Model {
    protected $_name = [
        'studentParam' => 'student_param',
        'userid' => 'userid',
        'classId' => 'class_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->studentParam) {
            $res['student_param'] = [];
            if(null !== $this->studentParam && is_array($this->studentParam)){
                $n = 0;
                foreach($this->studentParam as $item){
                    $res['student_param'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduClassStudentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['student_param'])){
            if(!empty($map['student_param'])){
                $model->studentParam = [];
                $n = 0;
                foreach($map['student_param'] as $item) {
                    $model->studentParam[$n++] = null !== $item ? studentParam::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        return $model;
    }
    /**
     * @description 学生入参
     * @var array
     */
    public $studentParam;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

}
