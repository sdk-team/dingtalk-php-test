<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiSmartdeviceDevicememberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'items' => 'items',
        'cursor' => 'cursor',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = $this->items;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['items'])){
            if(!empty($map['items'])){
                $model->items = $map['items'];
            }
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        return $model;
    }
    /**
     * @description 当前页所对应的userIds
     * @var array
     */
    public $items;

    /**
     * @description 当 has_more 为true时，下次查询需要传入的游标
     * @var int
     */
    public $cursor;

    /**
     * @description 是否还有数据
     * @var bool
     */
    public $hasMore;

}
