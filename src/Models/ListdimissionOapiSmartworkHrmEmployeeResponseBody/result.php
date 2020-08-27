<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListdimissionOapiSmartworkHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListdimissionOapiSmartworkHrmEmployeeResponseBody\result\deptList;

class result extends Model {
    protected $_name = [
        'userid' => 'userid',
        'lastWorkDay' => 'last_work_day',
        'deptList' => 'dept_list',
        'reasonMemo' => 'reason_memo',
        'reasonType' => 'reason_type',
        'preStatus' => 'pre_status',
        'handoverUserid' => 'handover_userid',
        'status' => 'status',
        'mainDeptName' => 'main_dept_name',
        'mainDeptId' => 'main_dept_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->lastWorkDay) {
            $res['last_work_day'] = $this->lastWorkDay;
        }
        if (null !== $this->deptList) {
            $res['dept_list'] = [];
            if(null !== $this->deptList && is_array($this->deptList)){
                $n = 0;
                foreach($this->deptList as $item){
                    $res['dept_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reasonMemo) {
            $res['reason_memo'] = $this->reasonMemo;
        }
        if (null !== $this->reasonType) {
            $res['reason_type'] = $this->reasonType;
        }
        if (null !== $this->preStatus) {
            $res['pre_status'] = $this->preStatus;
        }
        if (null !== $this->handoverUserid) {
            $res['handover_userid'] = $this->handoverUserid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->mainDeptName) {
            $res['main_dept_name'] = $this->mainDeptName;
        }
        if (null !== $this->mainDeptId) {
            $res['main_dept_id'] = $this->mainDeptId;
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
        if(isset($map['last_work_day'])){
            $model->lastWorkDay = $map['last_work_day'];
        }
        if(isset($map['dept_list'])){
            if(!empty($map['dept_list'])){
                $model->deptList = [];
                $n = 0;
                foreach($map['dept_list'] as $item) {
                    $model->deptList[$n++] = null !== $item ? deptList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['reason_memo'])){
            $model->reasonMemo = $map['reason_memo'];
        }
        if(isset($map['reason_type'])){
            $model->reasonType = $map['reason_type'];
        }
        if(isset($map['pre_status'])){
            $model->preStatus = $map['pre_status'];
        }
        if(isset($map['handover_userid'])){
            $model->handoverUserid = $map['handover_userid'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['main_dept_name'])){
            $model->mainDeptName = $map['main_dept_name'];
        }
        if(isset($map['main_dept_id'])){
            $model->mainDeptId = $map['main_dept_id'];
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 最后工作日
     * @var int
     */
    public $lastWorkDay;

    /**
     * @description 离职部门列表
     * @var array
     */
    public $deptList;

    /**
     * @description 离职原因备注
     * @var string
     */
    public $reasonMemo;

    /**
     * @description 离职原因类型：1，家庭原因；2，个人原因；3，发展原因；4，合同到期不续签；5，协议解除；6，无法胜任工作；7，经济性裁员；8，严重违法违纪；9，其他
     * @var int
     */
    public $reasonType;

    /**
     * @description 离职前工作状态：1，待入职；2，试用期；3，正式
     * @var int
     */
    public $preStatus;

    /**
     * @description 离职交接人
     * @var string
     */
    public $handoverUserid;

    /**
     * @description 离职状态：1，待离职；2，已离职
     * @var int
     */
    public $status;

    /**
     * @description 离职前主部门名称
     * @var string
     */
    public $mainDeptName;

    /**
     * @description 离职前主部门id
     * @var int
     */
    public $mainDeptId;

}
