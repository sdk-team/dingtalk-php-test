<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup\positions;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup\shiftVoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup\members;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup\resourcePermissionMap;

class topGroup extends Model {
    protected $_name = [
        'owner' => 'owner',
        'enableEmpSelectClass' => 'enable_emp_select_class',
        'corpId' => 'corp_id',
        'skipHolidays' => 'skip_holidays',
        'specialDays' => 'special_days',
        'enableOutsideCameraCheck' => 'enable_outside_camera_check',
        'positions' => 'positions',
        'modifyMember' => 'modify_member',
        'type' => 'type',
        'enableFaceCheck' => 'enable_face_check',
        'checkNeedHealthyCode' => 'check_need_healthy_code',
        'enableCameraCheck' => 'enable_camera_check',
        'shiftVoList' => 'shift_vo_list',
        'enableOutsideCheck' => 'enable_outside_check',
        'members' => 'members',
        'name' => 'name',
        'id' => 'id',
        'enableNextDay' => 'enable_next_day',
        'managerList' => 'manager_list',
        'workdayClassList' => 'workday_class_list',
        'defaultClassId' => 'default_class_id',
        'offset' => 'offset',
        'resourcePermissionMap' => 'resource_permission_map',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('members', $this->members, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->enableEmpSelectClass) {
            $res['enable_emp_select_class'] = $this->enableEmpSelectClass;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->skipHolidays) {
            $res['skip_holidays'] = $this->skipHolidays;
        }
        if (null !== $this->specialDays) {
            $res['special_days'] = $this->specialDays;
        }
        if (null !== $this->enableOutsideCameraCheck) {
            $res['enable_outside_camera_check'] = $this->enableOutsideCameraCheck;
        }
        if (null !== $this->positions) {
            $res['positions'] = [];
            if(null !== $this->positions && is_array($this->positions)){
                $n = 0;
                foreach($this->positions as $item){
                    $res['positions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifyMember) {
            $res['modify_member'] = $this->modifyMember;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->enableFaceCheck) {
            $res['enable_face_check'] = $this->enableFaceCheck;
        }
        if (null !== $this->checkNeedHealthyCode) {
            $res['check_need_healthy_code'] = $this->checkNeedHealthyCode;
        }
        if (null !== $this->enableCameraCheck) {
            $res['enable_camera_check'] = $this->enableCameraCheck;
        }
        if (null !== $this->shiftVoList) {
            $res['shift_vo_list'] = [];
            if(null !== $this->shiftVoList && is_array($this->shiftVoList)){
                $n = 0;
                foreach($this->shiftVoList as $item){
                    $res['shift_vo_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableOutsideCheck) {
            $res['enable_outside_check'] = $this->enableOutsideCheck;
        }
        if (null !== $this->members) {
            $res['members'] = [];
            if(null !== $this->members && is_array($this->members)){
                $n = 0;
                foreach($this->members as $item){
                    $res['members'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->enableNextDay) {
            $res['enable_next_day'] = $this->enableNextDay;
        }
        if (null !== $this->managerList) {
            $res['manager_list'] = $this->managerList;
        }
        if (null !== $this->workdayClassList) {
            $res['workday_class_list'] = $this->workdayClassList;
        }
        if (null !== $this->defaultClassId) {
            $res['default_class_id'] = $this->defaultClassId;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->resourcePermissionMap) {
            $res['resource_permission_map'] = null !== $this->resourcePermissionMap ? $this->resourcePermissionMap->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return topGroup
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['owner'])){
            $model->owner = $map['owner'];
        }
        if(isset($map['enable_emp_select_class'])){
            $model->enableEmpSelectClass = $map['enable_emp_select_class'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['skip_holidays'])){
            $model->skipHolidays = $map['skip_holidays'];
        }
        if(isset($map['special_days'])){
            $model->specialDays = $map['special_days'];
        }
        if(isset($map['enable_outside_camera_check'])){
            $model->enableOutsideCameraCheck = $map['enable_outside_camera_check'];
        }
        if(isset($map['positions'])){
            if(!empty($map['positions'])){
                $model->positions = [];
                $n = 0;
                foreach($map['positions'] as $item) {
                    $model->positions[$n++] = null !== $item ? positions::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['modify_member'])){
            $model->modifyMember = $map['modify_member'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['enable_face_check'])){
            $model->enableFaceCheck = $map['enable_face_check'];
        }
        if(isset($map['check_need_healthy_code'])){
            $model->checkNeedHealthyCode = $map['check_need_healthy_code'];
        }
        if(isset($map['enable_camera_check'])){
            $model->enableCameraCheck = $map['enable_camera_check'];
        }
        if(isset($map['shift_vo_list'])){
            if(!empty($map['shift_vo_list'])){
                $model->shiftVoList = [];
                $n = 0;
                foreach($map['shift_vo_list'] as $item) {
                    $model->shiftVoList[$n++] = null !== $item ? shiftVoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['enable_outside_check'])){
            $model->enableOutsideCheck = $map['enable_outside_check'];
        }
        if(isset($map['members'])){
            if(!empty($map['members'])){
                $model->members = [];
                $n = 0;
                foreach($map['members'] as $item) {
                    $model->members[$n++] = null !== $item ? members::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['enable_next_day'])){
            $model->enableNextDay = $map['enable_next_day'];
        }
        if(isset($map['manager_list'])){
            if(!empty($map['manager_list'])){
                $model->managerList = $map['manager_list'];
            }
        }
        if(isset($map['workday_class_list'])){
            if(!empty($map['workday_class_list'])){
                $model->workdayClassList = $map['workday_class_list'];
            }
        }
        if(isset($map['default_class_id'])){
            $model->defaultClassId = $map['default_class_id'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['resource_permission_map'])){
            $model->resourcePermissionMap = resourcePermissionMap::fromMap($map['resource_permission_map']);
        }
        return $model;
    }
    /**
     * @description 考勤组owner
     * @var string
     */
    public $owner;

    /**
     * @description 未排班时允许员工选择班次打卡
     * @var bool
     */
    public $enableEmpSelectClass;

    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 是否跳过节假日
     * @var bool
     */
    public $skipHolidays;

    /**
     * @description 特殊日期配置
     * @var string
     */
    public $specialDays;

    /**
     * @description 是否开启外勤打卡必须拍照
     * @var bool
     */
    public $enableOutsideCameraCheck;

    /**
     * @description 考勤地址
     * @var array
     */
    public $positions;

    /**
     * @description 是否有修改考勤组成员相关信息
     * @var bool
     */
    public $modifyMember;

    /**
     * @description 考勤组类型
     * @var string
     */
    public $type;

    /**
     * @description 是否开启人脸检测
     * @var bool
     */
    public $enableFaceCheck;

    /**
     * @description 打卡是否需要健康码
     * @var bool
     */
    public $checkNeedHealthyCode;

    /**
     * @description 是否开启拍照打卡
     * @var bool
     */
    public $enableCameraCheck;

    /**
     * @description 班次信息
     * @var array
     */
    public $shiftVoList;

    /**
     * @description 是否可以外勤打卡
     * @var bool
     */
    public $enableOutsideCheck;

    /**
     * @description 考勤组成员
     * @var array
     */
    public $members;

    /**
     * @description 考勤组名
     * @var string
     */
    public $name;

    /**
     * @description 考勤组id
     * @var int
     */
    public $id;

    /**
     * @description 是否第二天生效
     * @var bool
     */
    public $enableNextDay;

    /**
     * @description 考勤组子管理员userid列表
     * @var array
     */
    public $managerList;

    /**
     * @description 周班次列表（固定班制必填，0表示休息）
     * @var array
     */
    public $workdayClassList;

    /**
     * @description 默认班次id（固定班制必填）
     * @var int
     */
    public $defaultClassId;

    /**
     * @description 考勤范围
     * @var int
     */
    public $offset;

    /**
     * @description 子管理员权限范围（w表示可管理，r表示可读）
     * @var resourcePermissionMap
     */
    public $resourcePermissionMap;

}
