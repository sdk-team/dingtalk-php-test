<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'groups' => 'groups',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->groups) {
            $res['groups'] = [];
            if(null !== $this->groups && is_array($this->groups)){
                $n = 0;
                foreach($this->groups as $item){
                    $res['groups'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['groups'])){
            if(!empty($map['groups'])){
                $model->groups = [];
                $n = 0;
                foreach($map['groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 分页用，表示是否还有下一页
     * @var bool
     */
    public $hasMore;

    /**
     * @description 考勤组列表
     * @var array
     */
    public $groups;

}
