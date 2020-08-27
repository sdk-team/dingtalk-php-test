<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduTypeDataParams\orders;

class GetOapiEduTypeDataParams extends Model {
    protected $_name = [
        'pageSize' => 'page_size',
        'pageNum' => 'page_num',
        'statDate' => 'stat_date',
        'orders' => 'orders',
    ];
    public function validate() {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('statDate', $this->statDate, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageNum) {
            $res['page_num'] = $this->pageNum;
        }
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
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
     * @return GetOapiEduTypeDataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page_num'])){
            $model->pageNum = $map['page_num'];
        }
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
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
     * @description 每页大小；必须大于0
     * @var string
     */
    public $pageSize;

    /**
     * @description 页码；必须大于0
     * @var string
     */
    public $pageNum;

    /**
     * @description 统计日期
     * @var string
     */
    public $statDate;

    /**
     * @description 排序因子
     * @var array
     */
    public $orders;

}
