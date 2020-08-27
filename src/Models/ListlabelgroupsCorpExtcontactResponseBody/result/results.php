<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListlabelgroupsCorpExtcontactResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListlabelgroupsCorpExtcontactResponseBody\result\results\labels;

class results extends Model {
    protected $_name = [
        'name' => 'name',
        'color' => 'color',
        'labels' => 'labels',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->color) {
            $res['color'] = $this->color;
        }
        if (null !== $this->labels) {
            $res['labels'] = [];
            if(null !== $this->labels && is_array($this->labels)){
                $n = 0;
                foreach($this->labels as $item){
                    $res['labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return results
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['color'])){
            $model->color = $map['color'];
        }
        if(isset($map['labels'])){
            if(!empty($map['labels'])){
                $model->labels = [];
                $n = 0;
                foreach($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 标签组名字
     * @var string
     */
    public $name;

    /**
     * @description 标签组颜色
     * @var int
     */
    public $color;

    /**
     * @description labels
     * @var array
     */
    public $labels;

}
