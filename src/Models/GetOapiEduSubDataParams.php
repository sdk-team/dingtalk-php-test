<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduSubDataParams\orders;

class GetOapiEduSubDataParams extends Model {
    protected $_name = [
        'statDate' => 'stat_date',
        'pageNum' => 'page_num',
        'pageSize' => 'page_size',
        'orders' => 'orders',
    ];
    public function validate() {
        Model::validateRequired('statDate', $this->statDate, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->pageNum) {
            $res['page_num'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->orders) {
            $res['orders'] = [];
            if(null !== $this->orders && is_array($this->orders)){
                $n = 0;
                foreach($this->orders as $item){
                    $res['orders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduSubDataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['page_num'])){
            $model->pageNum = $map['page_num'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['orders'])){
            if(!empty($map['orders'])){
                $model->orders = [];
                $n = 0;
                foreach($map['orders'] as $item) {
                    $model->orders[$n++] = null !== $item ? orders::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 统计日期
     * @var string
     */
    public $statDate;

    /**
     * @description 页码，必须大于0
     * @var int
     */
    public $pageNum;

    /**
     * @description 每页大小，必须大于0
     * @var int
     */
    public $pageSize;

    /**
     * @description 排序因子
     * @var array
     */
    public $orders;

}
