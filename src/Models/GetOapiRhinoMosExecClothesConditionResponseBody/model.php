<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecClothesConditionResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecClothesConditionResponseBody\model\resultList;

class model extends Model {
    protected $_name = [
        'currentStart' => 'current_start',
        'pageSize' => 'page_size',
        'resultList' => 'result_list',
        'total' => 'total',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->currentStart) {
            $res['current_start'] = $this->currentStart;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->resultList) {
            $res['result_list'] = [];
            if(null !== $this->resultList && is_array($this->resultList)){
                $n = 0;
                foreach($this->resultList as $item){
                    $res['result_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if(isset($map['current_start'])){
            $model->currentStart = $map['current_start'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['result_list'])){
            if(!empty($map['result_list'])){
                $model->resultList = [];
                $n = 0;
                foreach($map['result_list'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
        return $model;
    }
    /**
     * @description 当前起始
     * @var int
     */
    public $currentStart;

    /**
     * @description 页大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 页信息
     * @var array
     */
    public $resultList;

    /**
     * @description 总数
     * @var int
     */
    public $total;

}
