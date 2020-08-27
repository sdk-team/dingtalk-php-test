<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BetaOapiCateringCooplistGetResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BetaOapiCateringCooplistGetResponseBody\result\list_;

class result extends Model {
    protected $_name = [
        'list' => 'list',
        'hasNext' => 'has_next',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->list) {
            $res['list'] = [];
            if(null !== $this->list && is_array($this->list)){
                $n = 0;
                foreach($this->list as $item){
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasNext) {
            $res['has_next'] = $this->hasNext;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = [];
                $n = 0;
                foreach($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_next'])){
            $model->hasNext = $map['has_next'];
        }
        return $model;
    }
    /**
     * @description list
     * @var array
     */
    public $list;

    /**
     * @description 是否有下一项数据
     * @var bool
     */
    public $hasNext;

}
