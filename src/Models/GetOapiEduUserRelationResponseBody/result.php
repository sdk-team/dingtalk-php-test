<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduUserRelationResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduUserRelationResponseBody\result\relations;

class result extends Model {
    protected $_name = [
        'relations' => 'relations',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
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
     * @description 关系详情列表
     * @var array
     */
    public $relations;

}
