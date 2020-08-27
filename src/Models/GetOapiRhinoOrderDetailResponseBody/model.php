<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoOrderDetailResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoOrderDetailResponseBody\model\detailList;

class model extends Model {
    protected $_name = [
        'detailList' => 'detail_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->detailList) {
            $res['detail_list'] = [];
            if(null !== $this->detailList && is_array($this->detailList)){
                $n = 0;
                foreach($this->detailList as $item){
                    $res['detail_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['detail_list'])){
            if(!empty($map['detail_list'])){
                $model->detailList = [];
                $n = 0;
                foreach($map['detail_list'] as $item) {
                    $model->detailList[$n++] = null !== $item ? detailList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 细码列表
     * @var array
     */
    public $detailList;

}
