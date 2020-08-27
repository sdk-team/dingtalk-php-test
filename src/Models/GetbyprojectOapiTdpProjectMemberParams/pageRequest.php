<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbyprojectOapiTdpProjectMemberParams;

use AlibabaCloud\Tea\Model;

class pageRequest extends Model {
    protected $_name = [
        'pageSize' => 'page_size',
        'orderBy' => 'order_by',
        'orderDirection' => 'order_direction',
        'page' => 'page',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }
        if (null !== $this->orderDirection) {
            $res['order_direction'] = $this->orderDirection;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return pageRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['order_by'])){
            $model->orderBy = $map['order_by'];
        }
        if(isset($map['order_direction'])){
            $model->orderDirection = $map['order_direction'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        return $model;
    }
    /**
     * @description 每页数量
     * @var int
     */
    public $pageSize;

    /**
     * @description 排序字段
     * @var string
     */
    public $orderBy;

    /**
     * @description 排序方向
     * @var string
     */
    public $orderDirection;

    /**
     * @description 起始页码
     * @var int
     */
    public $page;

}
