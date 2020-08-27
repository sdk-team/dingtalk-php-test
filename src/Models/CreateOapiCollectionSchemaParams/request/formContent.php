<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent\items;

class formContent extends Model {
    protected $_name = [
        'items' => 'items',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = [];
            if(null !== $this->items && is_array($this->items)){
                $n = 0;
                foreach($this->items as $item){
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return formContent
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['items'])){
            if(!empty($map['items'])){
                $model->items = [];
                $n = 0;
                foreach($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 控件数组
     * @var array
     */
    public $items;

}
