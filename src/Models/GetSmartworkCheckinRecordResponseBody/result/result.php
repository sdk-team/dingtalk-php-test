<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetSmartworkCheckinRecordResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetSmartworkCheckinRecordResponseBody\result\result\pageList;

class result extends Model {
    protected $_name = [
        'nextCursor' => 'next_cursor',
        'pageList' => 'page_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        if (null !== $this->pageList) {
            $res['page_list'] = [];
            if(null !== $this->pageList && is_array($this->pageList)){
                $n = 0;
                foreach($this->pageList as $item){
                    $res['page_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        if(isset($map['page_list'])){
            if(!empty($map['page_list'])){
                $model->pageList = [];
                $n = 0;
                foreach($map['page_list'] as $item) {
                    $model->pageList[$n++] = null !== $item ? pageList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 表示下次查询的游标，为null代表没有更多的数据了
     * @var int
     */
    public $nextCursor;

    /**
     * @description 分页列表
     * @var array
     */
    public $pageList;

}
