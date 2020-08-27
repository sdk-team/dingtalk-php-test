<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAppstoreGoodsResponseBody\goodsInfo;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAppstoreGoodsResponseBody\goodsInfo\itemList\itemCycList;

class itemList extends Model {
    protected $_name = [
        'isTryOuts' => 'is_try_outs',
        'itemName' => 'item_name',
        'itemCode' => 'item_code',
        'maxNum' => 'max_num',
        'minNum' => 'min_num',
        'itemCycList' => 'item_cyc_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->isTryOuts) {
            $res['is_try_outs'] = $this->isTryOuts;
        }
        if (null !== $this->itemName) {
            $res['item_name'] = $this->itemName;
        }
        if (null !== $this->itemCode) {
            $res['item_code'] = $this->itemCode;
        }
        if (null !== $this->maxNum) {
            $res['max_num'] = $this->maxNum;
        }
        if (null !== $this->minNum) {
            $res['min_num'] = $this->minNum;
        }
        if (null !== $this->itemCycList) {
            $res['item_cyc_list'] = [];
            if(null !== $this->itemCycList && is_array($this->itemCycList)){
                $n = 0;
                foreach($this->itemCycList as $item){
                    $res['item_cyc_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return itemList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['is_try_outs'])){
            $model->isTryOuts = $map['is_try_outs'];
        }
        if(isset($map['item_name'])){
            $model->itemName = $map['item_name'];
        }
        if(isset($map['item_code'])){
            $model->itemCode = $map['item_code'];
        }
        if(isset($map['max_num'])){
            $model->maxNum = $map['max_num'];
        }
        if(isset($map['min_num'])){
            $model->minNum = $map['min_num'];
        }
        if(isset($map['item_cyc_list'])){
            if(!empty($map['item_cyc_list'])){
                $model->itemCycList = [];
                $n = 0;
                foreach($map['item_cyc_list'] as $item) {
                    $model->itemCycList[$n++] = null !== $item ? itemCycList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否试用
     * @var bool
     */
    public $isTryOuts;

    /**
     * @description 规格名称
     * @var string
     */
    public $itemName;

    /**
     * @description 规格码
     * @var string
     */
    public $itemCode;

    /**
     * @description 最大购买人数
     * @var int
     */
    public $maxNum;

    /**
     * @description 最小购买人数
     * @var int
     */
    public $minNum;

    /**
     * @description 周期列表
     * @var array
     */
    public $itemCycList;

}
