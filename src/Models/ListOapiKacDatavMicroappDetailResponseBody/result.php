<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavMicroappDetailResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavMicroappDetailResponseBody\result\data;

class result extends Model {
    protected $_name = [
        'data' => 'data',
        'hasMore' => 'has_more',
        'nextCursor' => 'next_cursor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if(null !== $this->data && is_array($this->data)){
                $n = 0;
                foreach($this->data as $item){
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data'])){
            if(!empty($map['data'])){
                $model->data = [];
                $n = 0;
                foreach($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        return $model;
    }
    /**
     * @description 数据列表
     * @var array
     */
    public $data;

    /**
     * @description 是否有下一页；true则存在更多分页
     * @var bool
     */
    public $hasMore;

    /**
     * @description 下一次请求的分页游标
     * @var int
     */
    public $nextCursor;

}
