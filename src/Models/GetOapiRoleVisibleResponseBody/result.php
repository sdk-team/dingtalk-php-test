<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRoleVisibleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'nextCursor' => 'next_cursor',
        'hasMore' => 'has_more',
        'list' => 'list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->list) {
            $res['list'] = $this->list;
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
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = $map['list'];
            }
        }
        return $model;
    }
    /**
     * @description 下次请求的游标
     * @var string
     */
    public $nextCursor;

    /**
     * @description 是否还有数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description roleIdList
     * @var array
     */
    public $list;

}
