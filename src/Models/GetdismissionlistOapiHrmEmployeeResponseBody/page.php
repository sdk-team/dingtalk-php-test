<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetdismissionlistOapiHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetdismissionlistOapiHrmEmployeeResponseBody\page\dataList;

class page extends Model {
    protected $_name = [
        'current' => 'current',
        'pageSize' => 'page_size',
        'total' => 'total',
        'dataList' => 'data_list',
        'totalPage' => 'total_page',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->dataList) {
            $res['data_list'] = [];
            if(null !== $this->dataList && is_array($this->dataList)){
                $n = 0;
                foreach($this->dataList as $item){
                    $res['data_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPage) {
            $res['total_page'] = $this->totalPage;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return page
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['current'])){
            $model->current = $map['current'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
        if(isset($map['data_list'])){
            if(!empty($map['data_list'])){
                $model->dataList = [];
                $n = 0;
                foreach($map['data_list'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['total_page'])){
            $model->totalPage = $map['total_page'];
        }
        return $model;
    }
    /**
     * @description 当前页
     * @var int
     */
    public $current;

    /**
     * @description 每页最大数量，最大100
     * @var int
     */
    public $pageSize;

    /**
     * @description 总数
     * @var int
     */
    public $total;

    /**
     * @description 实际每条数据
     * @var array
     */
    public $dataList;

    /**
     * @description 总页数
     * @var int
     */
    public $totalPage;

}
