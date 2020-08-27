<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringStoreResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringStoreResponseBody\result\data;

class result extends Model {
    protected $_name = [
        'current' => 'current',
        'pageSize' => 'page_size',
        'total' => 'total',
        'hasMore' => 'has_more',
        'totalPage' => 'total_page',
        'data' => 'data',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->totalPage) {
            $res['total_page'] = $this->totalPage;
        }
        if (null !== $this->data) {
            $res['data'] = [];
            if(null !== $this->data && is_array($this->data)){
                $n = 0;
                foreach($this->data as $item){
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['current'])){
            $model->current = $map['current'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['total_page'])){
            $model->totalPage = $map['total_page'];
        }
        if(isset($map['data'])){
            if(!empty($map['data'])){
                $model->data = [];
                $n = 0;
                foreach($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 当前页码
     * @var int
     */
    public $current;

    /**
     * @description 每页记录数
     * @var int
     */
    public $pageSize;

    /**
     * @description 总记录数
     * @var int
     */
    public $total;

    /**
     * @description 是否有下一页数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 总页数
     * @var int
     */
    public $totalPage;

    /**
     * @description 当前页数据
     * @var array
     */
    public $data;

}
