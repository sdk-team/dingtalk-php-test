<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BaseinfoCorpSearchCorpcontactResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BaseinfoCorpSearchCorpcontactResponseBody\result\pageResult\valueList;

class pageResult extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'offset' => 'offset',
        'total' => 'total',
        'valueList' => 'value_list',
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
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->valueList) {
            $res['value_list'] = [];
            if(null !== $this->valueList && is_array($this->valueList)){
                $n = 0;
                foreach($this->valueList as $item){
                    $res['value_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return pageResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
        if(isset($map['value_list'])){
            if(!empty($map['value_list'])){
                $model->valueList = [];
                $n = 0;
                foreach($map['value_list'] as $item) {
                    $model->valueList[$n++] = null !== $item ? valueList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否还有更多数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 下次翻页的入参
     * @var int
     */
    public $offset;

    /**
     * @description 能获取的总条数(offset+size不能超过这个值)
     * @var int
     */
    public $total;

    /**
     * @description value
     * @var array
     */
    public $valueList;

}
