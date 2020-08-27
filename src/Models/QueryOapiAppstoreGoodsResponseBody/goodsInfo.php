<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAppstoreGoodsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAppstoreGoodsResponseBody\goodsInfo\itemList;

class goodsInfo extends Model {
    protected $_name = [
        'name' => 'name',
        'itemList' => 'item_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->itemList) {
            $res['item_list'] = [];
            if(null !== $this->itemList && is_array($this->itemList)){
                $n = 0;
                foreach($this->itemList as $item){
                    $res['item_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return goodsInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['item_list'])){
            if(!empty($map['item_list'])){
                $model->itemList = [];
                $n = 0;
                foreach($map['item_list'] as $item) {
                    $model->itemList[$n++] = null !== $item ? itemList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 商品名称
     * @var string
     */
    public $name;

    /**
     * @description 规格列表
     * @var array
     */
    public $itemList;

}
