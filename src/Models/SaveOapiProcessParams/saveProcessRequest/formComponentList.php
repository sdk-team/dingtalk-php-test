<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessParams\saveProcessRequest;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessParams\saveProcessRequest\formComponentList\props;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessParams\saveProcessRequest\formComponentList\children;

class formComponentList extends Model {
    protected $_name = [
        'componentName' => 'component_name',
        'props' => 'props',
        'children' => 'children',
    ];
    public function validate() {
        Model::validateRequired('componentName', $this->componentName, true);
        Model::validateRequired('props', $this->props, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        if (null !== $this->props) {
            $res['props'] = null !== $this->props ? $this->props->toMap() : null;
        }
        if (null !== $this->children) {
            $res['children'] = [];
            if(null !== $this->children && is_array($this->children)){
                $n = 0;
                foreach($this->children as $item){
                    $res['children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return formComponentList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['component_name'])){
            $model->componentName = $map['component_name'];
        }
        if(isset($map['props'])){
            $model->props = props::fromMap($map['props']);
        }
        if(isset($map['children'])){
            if(!empty($map['children'])){
                $model->children = [];
                $n = 0;
                foreach($map['children'] as $item) {
                    $model->children[$n++] = null !== $item ? children::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 表单名称
     * @var string
     */
    public $componentName;

    /**
     * @description 表单属性
     * @var props
     */
    public $props;

    /**
     * @description 子表单列表
     * @var array
     */
    public $children;

}
