<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\children\props;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\children\props\behaviorLinkage\targets;

class behaviorLinkage extends Model {
    protected $_name = [
        'value' => 'value',
        'targets' => 'targets',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->targets) {
            $res['targets'] = [];
            if(null !== $this->targets && is_array($this->targets)){
                $n = 0;
                foreach($this->targets as $item){
                    $res['targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return behaviorLinkage
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['targets'])){
            if(!empty($map['targets'])){
                $model->targets = [];
                $n = 0;
                foreach($map['targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 联动对应的单选组件选项
     * @var string
     */
    public $value;

    /**
     * @description 联动对应的目标
     * @var array
     */
    public $targets;

}
