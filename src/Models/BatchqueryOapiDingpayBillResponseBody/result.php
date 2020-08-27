<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchqueryOapiDingpayBillResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchqueryOapiDingpayBillResponseBody\result\billList;

class result extends Model {
    protected $_name = [
        'totalCount' => 'total_count',
        'billList' => 'bill_list',
        'currentPageNum' => 'current_page_num',
        'pageSize' => 'page_size',
        'totalPage' => 'total_page',
        'nextKey' => 'next_key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->totalCount) {
            $res['total_count'] = $this->totalCount;
        }
        if (null !== $this->billList) {
            $res['bill_list'] = [];
            if(null !== $this->billList && is_array($this->billList)){
                $n = 0;
                foreach($this->billList as $item){
                    $res['bill_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPageNum) {
            $res['current_page_num'] = $this->currentPageNum;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->totalPage) {
            $res['total_page'] = $this->totalPage;
        }
        if (null !== $this->nextKey) {
            $res['next_key'] = $this->nextKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['total_count'])){
            $model->totalCount = $map['total_count'];
        }
        if(isset($map['bill_list'])){
            if(!empty($map['bill_list'])){
                $model->billList = [];
                $n = 0;
                foreach($map['bill_list'] as $item) {
                    $model->billList[$n++] = null !== $item ? billList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['current_page_num'])){
            $model->currentPageNum = $map['current_page_num'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['total_page'])){
            $model->totalPage = $map['total_page'];
        }
        if(isset($map['next_key'])){
            $model->nextKey = $map['next_key'];
        }
        return $model;
    }
    /**
     * @description 总记录条数
     * @var int
     */
    public $totalCount;

    /**
     * @description billList
     * @var array
     */
    public $billList;

    /**
     * @description 当前页码
     * @var int
     */
    public $currentPageNum;

    /**
     * @description 每页大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 总页数
     * @var int
     */
    public $totalPage;

    /**
     * @description 如果nextKey不为空，说明还有翻页数据
     * @var string
     */
    public $nextKey;

}
