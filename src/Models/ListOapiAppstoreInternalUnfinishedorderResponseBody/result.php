<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAppstoreInternalUnfinishedorderResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAppstoreInternalUnfinishedorderResponseBody\result\items;

class result extends Model {
    protected $_name = [
        'total' => 'total',
        'items' => 'items',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
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
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
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
     * @description 总记录数
     * @var int
     */
    public $total;

    /**
     * @description 订单信息列表
     * @var array
     */
    public $items;

}
