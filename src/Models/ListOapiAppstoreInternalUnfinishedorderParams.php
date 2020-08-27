<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiAppstoreInternalUnfinishedorderParams extends Model {
    protected $_name = [
        'itemCode' => 'item_code',
        'page' => 'page',
        'pageSize' => 'page_size',
    ];
    public function validate() {
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->itemCode) {
            $res['item_code'] = $this->itemCode;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiAppstoreInternalUnfinishedorderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['item_code'])){
            $model->itemCode = $map['item_code'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        return $model;
    }
    /**
     * @description 商品规格码
     * @var string
     */
    public $itemCode;

    /**
     * @description 分页查询页码，其实页码为1
     * @var int
     */
    public $page;

    /**
     * @description 分页查询每页大小，最大限制100
     * @var int
     */
    public $pageSize;

}
