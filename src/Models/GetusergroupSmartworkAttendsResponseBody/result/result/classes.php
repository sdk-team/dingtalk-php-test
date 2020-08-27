<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupSmartworkAttendsResponseBody\result\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupSmartworkAttendsResponseBody\result\result\classes\sections;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupSmartworkAttendsResponseBody\result\result\classes\setting;

class classes extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'name' => 'name',
        'sections' => 'sections',
        'setting' => 'setting',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (null !== $this->setting) {
            $res['setting'] = null !== $this->setting ? $this->setting->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return classes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
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
        if(isset($map['setting'])){
            $model->setting = setting::fromMap($map['setting']);
        }
        return $model;
    }
    /**
     * @description 班次id
     * @var int
     */
    public $classId;

    /**
     * @description 班次名称
     * @var string
     */
    public $name;

    /**
     * @description 班次中上下班列表
     * @var array
     */
    public $sections;

    /**
     * @description 班次配置
     * @var setting
     */
    public $setting;

}
