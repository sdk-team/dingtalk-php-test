<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduUserRelationResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduUserRelationResponseBody\result\relations;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'relations' => 'relations',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->relations) {
            $res['relations'] = [];
            if(null !== $this->relations && is_array($this->relations)){
                $n = 0;
                foreach($this->relations as $item){
                    $res['relations'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['relations'])){
            if(!empty($map['relations'])){
                $model->relations = [];
                $n = 0;
                foreach($map['relations'] as $item) {
                    $model->relations[$n++] = null !== $item ? relations::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否还存在数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 关系列表
     * @var array
     */
    public $relations;

}
