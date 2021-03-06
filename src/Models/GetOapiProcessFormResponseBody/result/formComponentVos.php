<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\children;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\props;

class formComponentVos extends Model {
    protected $_name = [
        'children' => 'children',
        'props' => 'props',
        'isOldSuite' => 'is_old_suite',
        'componentName' => 'component_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->children) {
            $res['children'] = [];
            if(null !== $this->children && is_array($this->children)){
                $n = 0;
                foreach($this->children as $item){
                    $res['children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->props) {
            $res['props'] = null !== $this->props ? $this->props->toMap() : null;
        }
        if (null !== $this->isOldSuite) {
            $res['is_old_suite'] = $this->isOldSuite;
        }
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return formComponentVos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['children'])){
            if(!empty($map['children'])){
                $model->children = [];
                $n = 0;
                foreach($map['children'] as $item) {
                    $model->children[$n++] = null !== $item ? children::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['props'])){
            $model->props = props::fromMap($map['props']);
        }
        if(isset($map['is_old_suite'])){
            $model->isOldSuite = $map['is_old_suite'];
        }
        if(isset($map['component_name'])){
            $model->componentName = $map['component_name'];
        }
        return $model;
    }
    /**
     * @description 子组件
     * @var array
     */
    public $children;

    /**
     * @description 组件属性
     * @var props
     */
    public $props;

    /**
     * @description 是否为旧套件
     * @var bool
     */
    public $isOldSuite;

    /**
     * @description 控件类型
     * @var string
     */
    public $componentName;

}
