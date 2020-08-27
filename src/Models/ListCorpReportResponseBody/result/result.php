<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpReportResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpReportResponseBody\result\result\dataList;

class result extends Model {
    protected $_name = [
        'dataList' => 'data_list',
        'size' => 'size',
        'nextCursor' => 'next_cursor',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dataList) {
            $res['data_list'] = [];
            if(null !== $this->dataList && is_array($this->dataList)){
                $n = 0;
                foreach($this->dataList as $item){
                    $res['data_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
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
        if(isset($map['data_list'])){
            if(!empty($map['data_list'])){
                $model->dataList = [];
                $n = 0;
                foreach($map['data_list'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        return $model;
    }
    /**
     * @description 日志列表
     * @var array
     */
    public $dataList;

    /**
     * @description 分页大小
     * @var int
     */
    public $size;

    /**
     * @description nextCursor
     * @var int
     */
    public $nextCursor;

    /**
     * @description 是否还有下一页
     * @var bool
     */
    public $hasMore;

}
