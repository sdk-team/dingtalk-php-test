<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups\selectedClass\setting;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups\selectedClass\sections;

class selectedClass extends Model {
    protected $_name = [
        'setting' => 'setting',
        'classId' => 'class_id',
        'sections' => 'sections',
        'className' => 'class_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->setting) {
            $res['setting'] = null !== $this->setting ? $this->setting->toMap() : null;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->sections) {
            $res['sections'] = [];
            if(null !== $this->sections && is_array($this->sections)){
                $n = 0;
                foreach($this->sections as $item){
                    $res['sections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->className) {
            $res['class_name'] = $this->className;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return selectedClass
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['setting'])){
            $model->setting = setting::fromMap($map['setting']);
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['sections'])){
            if(!empty($map['sections'])){
                $model->sections = [];
                $n = 0;
                foreach($map['sections'] as $item) {
                    $model->sections[$n++] = null !== $item ? sections::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['class_name'])){
            $model->className = $map['class_name'];
        }
        return $model;
    }
    /**
     * @description 考勤组班次配置
     * @var setting
     */
    public $setting;

    /**
     * @description 考勤班次id
     * @var int
     */
    public $classId;

    /**
     * @description 班次打卡时间段,最多
     * @var array
     */
    public $sections;

    /**
     * @description 考勤班次名称
     * @var string
     */
    public $className;

}
