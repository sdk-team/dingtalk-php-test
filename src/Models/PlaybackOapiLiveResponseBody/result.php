<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\PlaybackOapiLiveResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\PlaybackOapiLiveResponseBody\result\playBackList;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'offset' => 'offset',
        'pageSize' => 'page_size',
        'allCount' => 'all_count',
        'playBackList' => 'play_back_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->allCount) {
            $res['all_count'] = $this->allCount;
        }
        if (null !== $this->playBackList) {
            $res['play_back_list'] = [];
            if(null !== $this->playBackList && is_array($this->playBackList)){
                $n = 0;
                foreach($this->playBackList as $item){
                    $res['play_back_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['all_count'])){
            $model->allCount = $map['all_count'];
        }
        if(isset($map['play_back_list'])){
            if(!empty($map['play_back_list'])){
                $model->playBackList = [];
                $n = 0;
                foreach($map['play_back_list'] as $item) {
                    $model->playBackList[$n++] = null !== $item ? playBackList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否还有
     * @var bool
     */
    public $hasMore;

    /**
     * @description 偏移量
     * @var int
     */
    public $offset;

    /**
     * @description 页面大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 结果总数
     * @var int
     */
    public $allCount;

    /**
     * @description 分页查询结果
     * @var array
     */
    public $playBackList;

}
