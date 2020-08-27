<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiEduHomeworkParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiEduHomeworkParams\selectStu\classStu;

class selectStu extends Model {
    protected $_name = [
        'className' => 'class_name',
        'classId' => 'class_id',
        'classStu' => 'class_stu',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->className) {
            $res['class_name'] = $this->className;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->classStu) {
            $res['class_stu'] = [];
            if(null !== $this->classStu && is_array($this->classStu)){
                $n = 0;
                foreach($this->classStu as $item){
                    $res['class_stu'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return selectStu
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_name'])){
            $model->className = $map['class_name'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['class_stu'])){
            if(!empty($map['class_stu'])){
                $model->classStu = [];
                $n = 0;
                foreach($map['class_stu'] as $item) {
                    $model->classStu[$n++] = null !== $item ? classStu::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 班级名称
     * @var string
     */
    public $className;

    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

    /**
     * @description 选择学生列表
     * @var array
     */
    public $classStu;

}
