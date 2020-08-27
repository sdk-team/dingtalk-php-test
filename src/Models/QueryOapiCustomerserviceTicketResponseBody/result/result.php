<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceTicketResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceTicketResponseBody\result\result\ticketList;

class result extends Model {
    protected $_name = [
        'total' => 'total',
        'ticketList' => 'ticket_list',
        'nextCursor' => 'next_cursor',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->ticketList) {
            $res['ticket_list'] = [];
            if(null !== $this->ticketList && is_array($this->ticketList)){
                $n = 0;
                foreach($this->ticketList as $item){
                    $res['ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
        if(isset($map['ticket_list'])){
            if(!empty($map['ticket_list'])){
                $model->ticketList = [];
                $n = 0;
                foreach($map['ticket_list'] as $item) {
                    $model->ticketList[$n++] = null !== $item ? ticketList::fromMap($item) : $item;
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
     * @description 总数
     * @var int
     */
    public $total;

    /**
     * @description 工单列表
     * @var array
     */
    public $ticketList;

    /**
     * @description 下一次分页的游标
     * @var int
     */
    public $nextCursor;

    /**
     * @description 是否有更多数据
     * @var bool
     */
    public $hasMore;

}
