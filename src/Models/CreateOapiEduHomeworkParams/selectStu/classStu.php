<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiEduHomeworkParams\selectStu;

use AlibabaCloud\Tea\Model;

class classStu extends Model {
    protected $_name = [
        'stuName' => 'stu_name',
        'stuId' => 'stu_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->stuName) {
            $res['stu_name'] = $this->stuName;
        }
        if (null !== $this->stuId) {
            $res['stu_id'] = $this->stuId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return classStu
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stu_name'])){
            $model->stuName = $map['stu_name'];
        }
        if(isset($map['stu_id'])){
            $model->stuId = $map['stu_id'];
        }
        return $model;
    }
    /**
     * @description 学生姓名
     * @var string
     */
    public $stuName;

    /**
     * @description 学生userid
     * @var string
     */
    public $stuId;

}
