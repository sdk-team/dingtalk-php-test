<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiSmartworkHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiSmartworkHrmEmployeeResponseBody\result\fieldList;

class result extends Model {
    protected $_name = [
        'userid' => 'userid',
        'fieldList' => 'field_list',
        'partner' => 'partner',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
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
        if (null !== $this->partner) {
            $res['partner'] = $this->partner;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
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
        if(isset($map['partner'])){
            $model->partner = $map['partner'];
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 字段信息列表
     * @var array
     */
    public $fieldList;

    /**
     * @description 是否是合伙伙伴
     * @var bool
     */
    public $partner;

}
