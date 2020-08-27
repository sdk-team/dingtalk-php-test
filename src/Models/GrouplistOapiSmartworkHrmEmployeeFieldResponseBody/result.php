<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GrouplistOapiSmartworkHrmEmployeeFieldResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GrouplistOapiSmartworkHrmEmployeeFieldResponseBody\result\fieldList;

class result extends Model {
    protected $_name = [
        'groupId' => 'group_id',
        'hasDetail' => 'has_detail',
        'fieldList' => 'field_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->hasDetail) {
            $res['has_detail'] = $this->hasDetail;
        }
        if (null !== $this->fieldList) {
            $res['field_list'] = [];
            if(null !== $this->fieldList && is_array($this->fieldList)){
                $n = 0;
                foreach($this->fieldList as $item){
                    $res['field_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['has_detail'])){
            $model->hasDetail = $map['has_detail'];
        }
        if(isset($map['field_list'])){
            if(!empty($map['field_list'])){
                $model->fieldList = [];
                $n = 0;
                foreach($map['field_list'] as $item) {
                    $model->fieldList[$n++] = null !== $item ? fieldList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 字段组ID
     * @var string
     */
    public $groupId;

    /**
     * @description 是否支持明细
     * @var bool
     */
    public $hasDetail;

    /**
     * @description 组里面的字段集合
     * @var array
     */
    public $fieldList;

}
