<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbyprojectOapiTdpProjectMemberResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbyprojectOapiTdpProjectMemberResponseBody\result\data;

class result extends Model {
    protected $_name = [
        'data' => 'data',
        'pageSize' => 'page_size',
        'page' => 'page',
        'totalCount' => 'total_count',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if(null !== $this->data && is_array($this->data)){
                $n = 0;
                foreach($this->data as $item){
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->totalCount) {
            $res['total_count'] = $this->totalCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data'])){
            if(!empty($map['data'])){
                $model->data = [];
                $n = 0;
                foreach($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['total_count'])){
            $model->totalCount = $map['total_count'];
        }
        return $model;
    }
    /**
     * @description 成员列表
     * @var array
     */
    public $data;

    /**
     * @description 每页数量
     * @var int
     */
    public $pageSize;

    /**
     * @description 起始页码
     * @var int
     */
    public $page;

    /**
     * @description 总数
     * @var int
     */
    public $totalCount;

}
