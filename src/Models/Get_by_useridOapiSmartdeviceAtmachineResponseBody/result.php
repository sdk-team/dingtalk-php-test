<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_by_useridOapiSmartdeviceAtmachineResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_by_useridOapiSmartdeviceAtmachineResponseBody\result\machineList;

class result extends Model {
    protected $_name = [
        'machineList' => 'machine_list',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->machineList) {
            $res['machine_list'] = [];
            if(null !== $this->machineList && is_array($this->machineList)){
                $n = 0;
                foreach($this->machineList as $item){
                    $res['machine_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['machine_list'])){
            if(!empty($map['machine_list'])){
                $model->machineList = [];
                $n = 0;
                foreach($map['machine_list'] as $item) {
                    $model->machineList[$n++] = null !== $item ? machineList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        return $model;
    }
    /**
     * @description 考勤机列表
     * @var array
     */
    public $machineList;

    /**
     * @description 分页查询中，后页是否还有数据
     * @var bool
     */
    public $hasMore;

}
