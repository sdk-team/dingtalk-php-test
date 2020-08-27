<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiReportReceiverResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'nextCursor' => 'next_cursor',
        'useridList' => 'userid_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
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
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 是否还有下一页
     * @var bool
     */
    public $hasMore;

    /**
     * @description 下一次分页调用的offset值，当返回结果里没有next_cursor时，表示分页结束
     * @var int
     */
    public $nextCursor;

    /**
     * @description userid列表
     * @var array
     */
    public $useridList;

}
