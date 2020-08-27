<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiHrmEmployeeResponseBody\groupList\fieldList;

class groupList extends Model {
    protected $_name = [
        'fieldList' => 'field_list',
        'groupName' => 'group_name',
        'groupId' => 'group_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fieldList) {
            $res['field_list'] = [];
            if(null !== $this->fieldList && is_array($this->fieldList)){
                $n = 0;
                foreach($this->fieldList as $item){
                    $res['field_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return groupList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['field_list'])){
            if(!empty($map['field_list'])){
                $model->fieldList = [];
                $n = 0;
                foreach($map['field_list'] as $item) {
                    $model->fieldList[$n++] = null !== $item ? fieldList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['group_name'])){
            $model->groupName = $map['group_name'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        return $model;
    }
    /**
     * @description 字段列表
     * @var array
     */
    public $fieldList;

    /**
     * @description 花名册分组名
     * @var string
     */
    public $groupName;

    /**
     * @description 花名册分组id
     * @var string
     */
    public $groupId;

}
