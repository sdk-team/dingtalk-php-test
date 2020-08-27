<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiMaterialArticleResponseBody\items;

class ListOapiMaterialArticleResponseBody extends Model {
    protected $_name = [
        'items' => 'items',
        'totalCount' => 'total_count',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'itemCount' => 'item_count',
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
        if (null !== $this->totalCount) {
            $res['total_count'] = $this->totalCount;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->itemCount) {
            $res['item_count'] = $this->itemCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiMaterialArticleResponseBody
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
        if(isset($map['total_count'])){
            $model->totalCount = $map['total_count'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['item_count'])){
            $model->itemCount = $map['item_count'];
        }
        return $model;
    }
    /**
     * @description 文章列表
     * @var array
     */
    public $items;

    /**
     * @description 总数
     * @var int
     */
    public $totalCount;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 本页条数
     * @var int
     */
    public $itemCount;

}
