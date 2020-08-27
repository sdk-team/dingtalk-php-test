<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiReportCommentResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiReportCommentResponseBody\result\comments;

class result extends Model {
    protected $_name = [
        'comments' => 'comments',
        'hasMore' => 'has_more',
        'nextCursor' => 'next_cursor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->comments) {
            $res['comments'] = [];
            if(null !== $this->comments && is_array($this->comments)){
                $n = 0;
                foreach($this->comments as $item){
                    $res['comments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['comments'])){
            if(!empty($map['comments'])){
                $model->comments = [];
                $n = 0;
                foreach($map['comments'] as $item) {
                    $model->comments[$n++] = null !== $item ? comments::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        return $model;
    }
    /**
     * @description 日志评论详情
     * @var array
     */
    public $comments;

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

}
