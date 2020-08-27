<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbyuseridOapiWorkrecordResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbyuseridOapiWorkrecordResponseBody\records\list_;

class records extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'list' => 'list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->list) {
            $res['list'] = [];
            if(null !== $this->list && is_array($this->list)){
                $n = 0;
                foreach($this->list as $item){
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return records
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = [];
                $n = 0;
                foreach($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description hasMore
     * @var bool
     */
    public $hasMore;

    /**
     * @description list
     * @var array
     */
    public $list;

}
