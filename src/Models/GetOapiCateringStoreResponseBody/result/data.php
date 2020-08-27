<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringStoreResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringStoreResponseBody\result\data\managerList;

class data extends Model {
    protected $_name = [
        'managerList' => 'manager_list',
        'type' => 'type',
        'deptName' => 'dept_name',
        'deptId' => 'dept_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->managerList) {
            $res['manager_list'] = [];
            if(null !== $this->managerList && is_array($this->managerList)){
                $n = 0;
                foreach($this->managerList as $item){
                    $res['manager_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['manager_list'])){
            if(!empty($map['manager_list'])){
                $model->managerList = [];
                $n = 0;
                foreach($map['manager_list'] as $item) {
                    $model->managerList[$n++] = null !== $item ? managerList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 门店店长列表
     * @var array
     */
    public $managerList;

    /**
     * @description 部门类型，门店为store
     * @var string
     */
    public $type;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 部门编号
     * @var int
     */
    public $deptId;

}
