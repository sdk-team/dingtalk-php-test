<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessWorkrecordTemplateParams\saveProcessRequest\formComponentList;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessWorkrecordTemplateParams\saveProcessRequest\formComponentList\children\props;

class children extends Model {
    protected $_name = [
        'componentName' => 'component_name',
        'props' => 'props',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        if (null !== $this->props) {
            $res['props'] = null !== $this->props ? $this->props->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return children
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['component_name'])){
            $model->componentName = $map['component_name'];
        }
        if(isset($map['props'])){
            $model->props = props::fromMap($map['props']);
        }
        return $model;
    }
    /**
     * @description 表单名称
     * @var string
     */
    public $componentName;

    /**
     * @description 子表单属性
     * @var props
     */
    public $props;

}
