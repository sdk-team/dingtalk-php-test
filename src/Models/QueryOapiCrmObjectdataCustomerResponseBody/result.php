<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCrmObjectdataCustomerResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCrmObjectdataCustomerResponseBody\result\values;

class result extends Model {
    protected $_name = [
        'nextCursor' => 'next_cursor',
        'values' => 'values',
        'hasMore' => 'has_more',
        'pageSize' => 'page_size',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        if (null !== $this->values) {
            $res['values'] = [];
            if(null !== $this->values && is_array($this->values)){
                $n = 0;
                foreach($this->values as $item){
                    $res['values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        if(isset($map['values'])){
            if(!empty($map['values'])){
                $model->values = [];
                $n = 0;
                foreach($map['values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        return $model;
    }
    /**
     * @description 下一页的游标
     * @var string
     */
    public $nextCursor;

    /**
     * @description 数据列表
     * @var array
     */
    public $values;

    /**
     * @description 是否有下一页
     * @var bool
     */
    public $hasMore;

    /**
     * @description 分页大小
     * @var int
     */
    public $pageSize;

}
