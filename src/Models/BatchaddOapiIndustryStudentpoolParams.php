<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiIndustryStudentpoolParams\studentList;

class BatchaddOapiIndustryStudentpoolParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'studentList' => 'student_list',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->studentList) {
            $res['student_list'] = [];
            if(null !== $this->studentList && is_array($this->studentList)){
                $n = 0;
                foreach($this->studentList as $item){
                    $res['student_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BatchaddOapiIndustryStudentpoolParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['student_list'])){
            if(!empty($map['student_list'])){
                $model->studentList = [];
                $n = 0;
                foreach($map['student_list'] as $item) {
                    $model->studentList[$n++] = null !== $item ? studentList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 业务code
     * @var string
     */
    public $bizCode;

    /**
     * @description 学员列表
     * @var array
     */
    public $studentList;

}
