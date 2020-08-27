<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiIndustryDepartmentResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiIndustryDepartmentResponseBody\result\details;

class result extends Model {
    protected $_name = [
        'details' => 'details',
        'nextCursor' => 'next_cursor',
        'hasMore' => 'has_more',
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
        if(isset($map['details'])){
            if(!empty($map['details'])){
                $model->details = [];
                $n = 0;
                foreach($map['details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
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
     * @description details
     * @var array
     */
    public $details;

    /**
     * @description 下一个游标开始位置
     * @var int
     */
    public $nextCursor;

    /**
     * @description 是否还有更多
     * @var bool
     */
    public $hasMore;

}
