<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiSmartdeviceMeetingroomParticipantResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiSmartdeviceMeetingroomParticipantResponseBody\result\participants;

class result extends Model {
    protected $_name = [
        'nextCursor' => 'next_cursor',
        'participants' => 'participants',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        if (null !== $this->participants) {
            $res['participants'] = [];
            if(null !== $this->participants && is_array($this->participants)){
                $n = 0;
                foreach($this->participants as $item){
                    $res['participants'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if(isset($map['participants'])){
            if(!empty($map['participants'])){
                $model->participants = [];
                $n = 0;
                foreach($map['participants'] as $item) {
                    $model->participants[$n++] = null !== $item ? participants::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        return $model;
    }
    /**
     * @description 游标
     * @var string
     */
    public $nextCursor;

    /**
     * @description 参会人列表
     * @var array
     */
    public $participants;

    /**
     * @description 是否有下一页
     * @var bool
     */
    public $hasMore;

}
