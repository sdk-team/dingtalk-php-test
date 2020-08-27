<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups\selectedClass;

class groups extends Model {
    protected $_name = [
        'groupId' => 'group_id',
        'isDefault' => 'is_default',
        'groupName' => 'group_name',
        'selectedClass' => 'selected_class',
        'type' => 'type',
        'memberCount' => 'member_count',
        'defaultClassId' => 'default_class_id',
        'workDayList' => 'work_day_list',
        'classesList' => 'classes_list',
        'managerList' => 'manager_list',
        'deptNameList' => 'dept_name_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->isDefault) {
            $res['is_default'] = $this->isDefault;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->selectedClass) {
            $res['selected_class'] = [];
            if(null !== $this->selectedClass && is_array($this->selectedClass)){
                $n = 0;
                foreach($this->selectedClass as $item){
                    $res['selected_class'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->memberCount) {
            $res['member_count'] = $this->memberCount;
        }
        if (null !== $this->defaultClassId) {
            $res['default_class_id'] = $this->defaultClassId;
        }
        if (null !== $this->workDayList) {
            $res['work_day_list'] = $this->workDayList;
        }
        if (null !== $this->classesList) {
            $res['classes_list'] = $this->classesList;
        }
        if (null !== $this->managerList) {
            $res['manager_list'] = $this->managerList;
        }
        if (null !== $this->deptNameList) {
            $res['dept_name_list'] = $this->deptNameList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return groups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['is_default'])){
            $model->isDefault = $map['is_default'];
        }
        if(isset($map['group_name'])){
            $model->groupName = $map['group_name'];
        }
        if(isset($map['selected_class'])){
            if(!empty($map['selected_class'])){
                $model->selectedClass = [];
                $n = 0;
                foreach($map['selected_class'] as $item) {
                    $model->selectedClass[$n++] = null !== $item ? selectedClass::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['member_count'])){
            $model->memberCount = $map['member_count'];
        }
        if(isset($map['default_class_id'])){
            $model->defaultClassId = $map['default_class_id'];
        }
        if(isset($map['work_day_list'])){
            if(!empty($map['work_day_list'])){
                $model->workDayList = $map['work_day_list'];
            }
        }
        if(isset($map['classes_list'])){
            if(!empty($map['classes_list'])){
                $model->classesList = $map['classes_list'];
            }
        }
        if(isset($map['manager_list'])){
            if(!empty($map['manager_list'])){
                $model->managerList = $map['manager_list'];
            }
        }
        if(isset($map['dept_name_list'])){
            if(!empty($map['dept_name_list'])){
                $model->deptNameList = $map['dept_name_list'];
            }
        }
        return $model;
    }
    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 是否默认考勤组
     * @var bool
     */
    public $isDefault;

    /**
     * @description 考勤组名称
     * @var string
     */
    public $groupName;

    /**
     * @description 考勤组对应的考勤班次列表
     * @var array
     */
    public $selectedClass;

    /**
     * @description 考勤类型，FIXED为固定排班，TURN为轮班排班，NONE为无班次
     * @var string
     */
    public $type;

    /**
     * @description 成员人数
     * @var int
     */
    public $memberCount;

    /**
     * @description 默认班次id
     * @var int
     */
    public $defaultClassId;

    /**
     * @description 固定班次的工作日班次
     * @var array
     */
    public $workDayList;

    /**
     * @description 一周的班次时间展示列表。["周一、二 班次A:09:00-18:00", "周六、周日 休息"]
     * @var array
     */
    public $classesList;

    /**
     * @description 考勤组负责人
     * @var array
     */
    public $managerList;

    /**
     * @description 关联的部门
     * @var array
     */
    public $deptNameList;

}
