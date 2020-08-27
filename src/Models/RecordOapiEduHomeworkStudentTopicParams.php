<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RecordOapiEduHomeworkStudentTopicParams\studentAnswerDetails;

class RecordOapiEduHomeworkStudentTopicParams extends Model {
    protected $_name = [
        'studentAnswerDetails' => 'student_answer_details',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->studentAnswerDetails) {
            $res['student_answer_details'] = [];
            if(null !== $this->studentAnswerDetails && is_array($this->studentAnswerDetails)){
                $n = 0;
                foreach($this->studentAnswerDetails as $item){
                    $res['student_answer_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RecordOapiEduHomeworkStudentTopicParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['student_answer_details'])){
            if(!empty($map['student_answer_details'])){
                $model->studentAnswerDetails = [];
                $n = 0;
                foreach($map['student_answer_details'] as $item) {
                    $model->studentAnswerDetails[$n++] = null !== $item ? studentAnswerDetails::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 答题记录详情
     * @var array
     */
    public $studentAnswerDetails;

}
