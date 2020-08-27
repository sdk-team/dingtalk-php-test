<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiInactiveUserV2ResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'nextCursor' => 'next_cursor',
        'list' => 'list',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        if (null !== $this->list) {
            $res['list'] = $this->list;
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
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = $map['list'];
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        return $model;
    }
    /**
     * @description 下一页的偏移量
     * @var int
     */
    public $nextCursor;

    /**
     * @description 用户列表
     * @var array
     */
    public $list;

    /**
     * @description 是否有更多数据
     * @var bool
     */
    public $hasMore;

}
