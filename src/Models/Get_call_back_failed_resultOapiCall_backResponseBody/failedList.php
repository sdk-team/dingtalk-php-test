<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_call_back_failed_resultOapiCall_backResponseBody;

use AlibabaCloud\Tea\Model;

class failedList extends Model {
    protected $_name = [
        'callBackTag' => 'call_back_tag',
        'eventTime' => 'event_time',
        'userModifyOrg' => 'user_modify_org',
        'userAddOrg' => 'user_add_org',
        'userLeaveOrg' => 'user_leave_org',
        'orgDeptCreate' => 'org_dept_create',
        'orgDeptModify' => 'org_dept_modify',
        'orgDeptRemove' => 'org_dept_remove',
        'orgChange' => 'org_change',
        'bpmsInstanceChange' => 'bpms_instance_change',
        'bpmsTaskChange' => 'bpms_task_change',
        'checkIn' => 'check_in',
        'orgAdminAdd' => 'org_admin_add',
        'orgAdminRemove' => 'org_admin_remove',
        'data' => 'data',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->callBackTag) {
            $res['call_back_tag'] = $this->callBackTag;
        }
        if (null !== $this->eventTime) {
            $res['event_time'] = $this->eventTime;
        }
        if (null !== $this->userModifyOrg) {
            $res['user_modify_org'] = $this->userModifyOrg;
        }
        if (null !== $this->userAddOrg) {
            $res['user_add_org'] = $this->userAddOrg;
        }
        if (null !== $this->userLeaveOrg) {
            $res['user_leave_org'] = $this->userLeaveOrg;
        }
        if (null !== $this->orgDeptCreate) {
            $res['org_dept_create'] = $this->orgDeptCreate;
        }
        if (null !== $this->orgDeptModify) {
            $res['org_dept_modify'] = $this->orgDeptModify;
        }
        if (null !== $this->orgDeptRemove) {
            $res['org_dept_remove'] = $this->orgDeptRemove;
        }
        if (null !== $this->orgChange) {
            $res['org_change'] = $this->orgChange;
        }
        if (null !== $this->bpmsInstanceChange) {
            $res['bpms_instance_change'] = $this->bpmsInstanceChange;
        }
        if (null !== $this->bpmsTaskChange) {
            $res['bpms_task_change'] = $this->bpmsTaskChange;
        }
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }
        if (null !== $this->orgAdminAdd) {
            $res['org_admin_add'] = $this->orgAdminAdd;
        }
        if (null !== $this->orgAdminRemove) {
            $res['org_admin_remove'] = $this->orgAdminRemove;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return failedList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['call_back_tag'])){
            $model->callBackTag = $map['call_back_tag'];
        }
        if(isset($map['event_time'])){
            $model->eventTime = $map['event_time'];
        }
        if(isset($map['user_modify_org'])){
            $model->userModifyOrg = $map['user_modify_org'];
        }
        if(isset($map['user_add_org'])){
            $model->userAddOrg = $map['user_add_org'];
        }
        if(isset($map['user_leave_org'])){
            $model->userLeaveOrg = $map['user_leave_org'];
        }
        if(isset($map['org_dept_create'])){
            $model->orgDeptCreate = $map['org_dept_create'];
        }
        if(isset($map['org_dept_modify'])){
            $model->orgDeptModify = $map['org_dept_modify'];
        }
        if(isset($map['org_dept_remove'])){
            $model->orgDeptRemove = $map['org_dept_remove'];
        }
        if(isset($map['org_change'])){
            $model->orgChange = $map['org_change'];
        }
        if(isset($map['bpms_instance_change'])){
            $model->bpmsInstanceChange = $map['bpms_instance_change'];
        }
        if(isset($map['bpms_task_change'])){
            $model->bpmsTaskChange = $map['bpms_task_change'];
        }
        if(isset($map['check_in'])){
            $model->checkIn = $map['check_in'];
        }
        if(isset($map['org_admin_add'])){
            $model->orgAdminAdd = $map['org_admin_add'];
        }
        if(isset($map['org_admin_remove'])){
            $model->orgAdminRemove = $map['org_admin_remove'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        return $model;
    }
    /**
     * @description 事件类型，有20种，“user_add_org”, “user_modify_org”, “user_leave_org”,“org_admin_add”, “org_admin_remove”, “org_dept_create”, “org_dept_modify”, “org_dept_remove”, “org_remove”, “chat_add_member”, “chat_remove_member”, “chat_quit”, “chat_update_owner”, “chat_update_title”, “chat_disband”,“chat_disband_microapp”, “check_in”,“bpms_task_change”,“bpms_instance_change”,“label_user_change”, “label_conf_add”, “label_conf_modify”,“label_conf_del”
     * @var string
     */
    public $callBackTag;

    /**
     * @description event_time
     * @var int
     */
    public $eventTime;

    /**
     * @description user_modify_org
     * @var string
     */
    public $userModifyOrg;

    /**
     * @description user_add_org
     * @var string
     */
    public $userAddOrg;

    /**
     * @description user_leave_org
     * @var string
     */
    public $userLeaveOrg;

    /**
     * @description org_dept_create
     * @var string
     */
    public $orgDeptCreate;

    /**
     * @description org_dept_modify
     * @var string
     */
    public $orgDeptModify;

    /**
     * @description org_dept_remove
     * @var string
     */
    public $orgDeptRemove;

    /**
     * @description org_change
     * @var string
     */
    public $orgChange;

    /**
     * @description bpms_instance_change
     * @var string
     */
    public $bpmsInstanceChange;

    /**
     * @description bpms_task_change
     * @var string
     */
    public $bpmsTaskChange;

    /**
     * @description check_in
     * @var string
     */
    public $checkIn;

    /**
     * @description org_admin_add
     * @var string
     */
    public $orgAdminAdd;

    /**
     * @description org_admin_remove
     * @var string
     */
    public $orgAdminRemove;

    /**
     * @description data
     * @var string
     */
    public $data;

}
