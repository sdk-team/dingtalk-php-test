<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripApplyResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripApplyResponseBody\module\itineraryList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripApplyResponseBody\module\travelerList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripApplyResponseBody\module\approverList;

class module extends Model {
    protected $_name = [
        'id' => 'id',
        'applyShowId' => 'apply_show_id',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'thirdpartId' => 'thirdpart_id',
        'corpid' => 'corpid',
        'userid' => 'userid',
        'deptid' => 'deptid',
        'corpName' => 'corp_name',
        'userName' => 'user_name',
        'deptName' => 'dept_name',
        'tripDay' => 'trip_day',
        'tripCause' => 'trip_cause',
        'tripTitle' => 'trip_title',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'itineraryList' => 'itinerary_list',
        'travelerList' => 'traveler_list',
        'approverList' => 'approver_list',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->applyShowId) {
            $res['apply_show_id'] = $this->applyShowId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->deptid) {
            $res['deptid'] = $this->deptid;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->tripDay) {
            $res['trip_day'] = $this->tripDay;
        }
        if (null !== $this->tripCause) {
            $res['trip_cause'] = $this->tripCause;
        }
        if (null !== $this->tripTitle) {
            $res['trip_title'] = $this->tripTitle;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['status_desc'] = $this->statusDesc;
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
        if (null !== $this->travelerList) {
            $res['traveler_list'] = [];
            if(null !== $this->travelerList && is_array($this->travelerList)){
                $n = 0;
                foreach($this->travelerList as $item){
                    $res['traveler_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->approverList) {
            $res['approver_list'] = [];
            if(null !== $this->approverList && is_array($this->approverList)){
                $n = 0;
                foreach($this->approverList as $item){
                    $res['approver_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return module
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['apply_show_id'])){
            $model->applyShowId = $map['apply_show_id'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['thirdpart_id'])){
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['deptid'])){
            $model->deptid = $map['deptid'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['trip_day'])){
            $model->tripDay = $map['trip_day'];
        }
        if(isset($map['trip_cause'])){
            $model->tripCause = $map['trip_cause'];
        }
        if(isset($map['trip_title'])){
            $model->tripTitle = $map['trip_title'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['status_desc'])){
            $model->statusDesc = $map['status_desc'];
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
        if(isset($map['traveler_list'])){
            if(!empty($map['traveler_list'])){
                $model->travelerList = [];
                $n = 0;
                foreach($map['traveler_list'] as $item) {
                    $model->travelerList[$n++] = null !== $item ? travelerList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['approver_list'])){
            if(!empty($map['approver_list'])){
                $model->approverList = [];
                $n = 0;
                foreach($map['approver_list'] as $item) {
                    $model->approverList[$n++] = null !== $item ? approverList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 商旅审批单id
     * @var int
     */
    public $id;

    /**
     * @description 商旅审批展示id
     * @var string
     */
    public $applyShowId;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 更新时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 第三方审批单id,如果非第三方审批单则为空
     * @var string
     */
    public $thirdpartId;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 部门id
     * @var string
     */
    public $deptid;

    /**
     * @description 企业名称
     * @var string
     */
    public $corpName;

    /**
     * @description 用户名称
     * @var string
     */
    public $userName;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 出差天数
     * @var int
     */
    public $tripDay;

    /**
     * @description 出差事由
     * @var string
     */
    public $tripCause;

    /**
     * @description 申请单标题
     * @var string
     */
    public $tripTitle;

    /**
     * @description 申请单状态：0申请 1同意 2拒绝 3转交 4取消 5修改已同意 6撤销已同意 7修改审批中 8已同意(修改被拒绝) 9撤销审批中 10已同意(撤销被拒绝) 11已同意(修改被取消) 12已同意(撤销被取消)
     * @var int
     */
    public $status;

    /**
     * @description 审批单状态描述
     * @var string
     */
    public $statusDesc;

    /**
     * @description 行程列表
     * @var array
     */
    public $itineraryList;

    /**
     * @description 出行人列表
     * @var array
     */
    public $travelerList;

    /**
     * @description approverList
     * @var array
     */
    public $approverList;

}
