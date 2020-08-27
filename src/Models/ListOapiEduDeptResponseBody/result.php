<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduDeptResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduDeptResponseBody\result\details;

class result extends Model {
    protected $_name = [
        'details' => 'details',
        'hasMore' => 'has_more',
        'superId' => 'super_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->details) {
            $res['details'] = [];
            if(null !== $this->details && is_array($this->details)){
                $n = 0;
                foreach($this->details as $item){
                    $res['details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->superId) {
            $res['super_id'] = $this->superId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['details'])){
            if(!empty($map['details'])){
                $model->details = [];
                $n = 0;
                foreach($map['details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['super_id'])){
            $model->superId = $map['super_id'];
        }
        return $model;
    }
    /**
     * @description 部门节点列表，不空。
     * @var array
     */
    public $details;

    /**
     * @description 是否有更多数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 父部门id
     * @var int
     */
    public $superId;

}
