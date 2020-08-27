<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_by_deptidOapiSmartdeviceAtmachineResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_by_deptidOapiSmartdeviceAtmachineResponseBody\result\machineList;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'machineList' => 'machine_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->machineList) {
            $res['machine_list'] = [];
            if(null !== $this->machineList && is_array($this->machineList)){
                $n = 0;
                foreach($this->machineList as $item){
                    $res['machine_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['machine_list'])){
            if(!empty($map['machine_list'])){
                $model->machineList = [];
                $n = 0;
                foreach($map['machine_list'] as $item) {
                    $model->machineList[$n++] = null !== $item ? machineList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 分页查询中，后页是否还有数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 考勤机列表
     * @var array
     */
    public $machineList;

}
