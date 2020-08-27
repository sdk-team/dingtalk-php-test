<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiAlitripBtripApprovalParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiAlitripBtripApprovalParams\rq\travelerList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiAlitripBtripApprovalParams\rq\itineraryList;

class rq extends Model {
    protected $_name = [
        'thirdpartBusinessId' => 'thirdpart_business_id',
        'status' => 'status',
        'corpid' => 'corpid',
        'travelerList' => 'traveler_list',
        'deptid' => 'deptid',
        'userName' => 'user_name',
        'userid' => 'userid',
        'corpName' => 'corp_name',
        'tripCause' => 'trip_cause',
        'deptName' => 'dept_name',
        'itineraryList' => 'itinerary_list',
        'tripTitle' => 'trip_title',
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'tripDay' => 'trip_day',
    ];
    public function validate() {
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validateRequired('travelerList', $this->travelerList, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('tripCause', $this->tripCause, true);
        Model::validateRequired('itineraryList', $this->itineraryList, true);
        Model::validateRequired('tripTitle', $this->tripTitle, true);
        Model::validateRequired('thirdpartApplyId', $this->thirdpartApplyId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->thirdpartBusinessId) {
            $res['thirdpart_business_id'] = $this->thirdpartBusinessId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->travelerList) {
            $res['traveler_list'] = [];
            if(null !== $this->travelerList && is_array($this->travelerList)){
                $n = 0;
                foreach($this->travelerList as $item){
                    $res['traveler_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deptid) {
            $res['deptid'] = $this->deptid;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->tripCause) {
            $res['trip_cause'] = $this->tripCause;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->itineraryList) {
            $res['itinerary_list'] = [];
            if(null !== $this->itineraryList && is_array($this->itineraryList)){
                $n = 0;
                foreach($this->itineraryList as $item){
                    $res['itinerary_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tripTitle) {
            $res['trip_title'] = $this->tripTitle;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->tripDay) {
            $res['trip_day'] = $this->tripDay;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['thirdpart_business_id'])){
            $model->thirdpartBusinessId = $map['thirdpart_business_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['traveler_list'])){
            if(!empty($map['traveler_list'])){
                $model->travelerList = [];
                $n = 0;
                foreach($map['traveler_list'] as $item) {
                    $model->travelerList[$n++] = null !== $item ? travelerList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['deptid'])){
            $model->deptid = $map['deptid'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['trip_cause'])){
            $model->tripCause = $map['trip_cause'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['itinerary_list'])){
            if(!empty($map['itinerary_list'])){
                $model->itineraryList = [];
                $n = 0;
                foreach($map['itinerary_list'] as $item) {
                    $model->itineraryList[$n++] = null !== $item ? itineraryList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['trip_title'])){
            $model->tripTitle = $map['trip_title'];
        }
        if(isset($map['thirdpart_apply_id'])){
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if(isset($map['trip_day'])){
            $model->tripDay = $map['trip_day'];
        }
        return $model;
    }
    /**
     * @description 用户展示的外部审批单id信息
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @description 审批单状态，不传入默认为0：0审批中，1同意，2拒绝
     * @var int
     */
    public $status;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 出行人列表
     * @var array
     */
    public $travelerList;

    /**
     * @description 部门id，如果不传，会根据user相关信息去获取对应的部门信息，如果传的是错误的部门信息，后面无法做部门的费用归属；部门ID只能是数字
     * @var string
     */
    public $deptid;

    /**
     * @description 用户名称，如果要传必须传真实姓名，如果不传则会以系统当前维护userId对应的名称进行预订
     * @var string
     */
    public $userName;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 企业名称
     * @var string
     */
    public $corpName;

    /**
     * @description 出差事由
     * @var string
     */
    public $tripCause;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 行程列表
     * @var array
     */
    public $itineraryList;

    /**
     * @description 申请单标题
     * @var string
     */
    public $tripTitle;

    /**
     * @description 外部申请单id
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @description 出差天数
     * @var int
     */
    public $tripDay;

}
