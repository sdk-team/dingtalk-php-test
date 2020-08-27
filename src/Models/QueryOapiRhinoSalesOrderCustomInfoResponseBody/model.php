<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoSalesOrderCustomInfoResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoSalesOrderCustomInfoResponseBody\model\list_;

class model extends Model {
    protected $_name = [
        'list' => 'list',
        'page' => 'page',
        'pageSize' => 'page_size',
        'total' => 'total',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->list) {
            $res['list'] = [];
            if(null !== $this->list && is_array($this->list)){
                $n = 0;
                foreach($this->list as $item){
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = [];
                $n = 0;
                foreach($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
        return $model;
    }
    /**
     * @description 2C订单列表
     * @var array
     */
    public $list;

    /**
     * @description 当前页数
     * @var int
     */
    public $page;

    /**
     * @description 分页大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 总数
     * @var int
     */
    public $total;

}
