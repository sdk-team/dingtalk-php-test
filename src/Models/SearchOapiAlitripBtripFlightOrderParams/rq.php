<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'startTime' => 'start_time',
        'applyId' => 'apply_id',
        'page' => 'page',
        'userid' => 'userid',
        'pageSize' => 'page_size',
        'deptid' => 'deptid',
        'endTime' => 'end_time',
        'corpid' => 'corpid',
        'updateEndTime' => 'update_end_time',
        'updateStartTime' => 'update_start_time',
    ];
    public function validate() {
        Model::validatePattern('startTime', $this->startTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('updateEndTime', $this->updateEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('updateStartTime', $this->updateStartTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->deptid) {
            $res['deptid'] = $this->deptid;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->updateEndTime) {
            $res['update_end_time'] = $this->updateEndTime;
        }
        if (null !== $this->updateStartTime) {
            $res['update_start_time'] = $this->updateStartTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['apply_id'])){
            $model->applyId = $map['apply_id'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['deptid'])){
            $model->deptid = $map['deptid'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['update_end_time'])){
            $model->updateEndTime = $map['update_end_time'];
        }
        if(isset($map['update_start_time'])){
            $model->updateStartTime = $map['update_start_time'];
        }
        return $model;
    }
    /**
     * @description 开始时间
     * @var string
     */
    public $startTime;

    /**
     * @description 商旅申请单id
     * @var int
     */
    public $applyId;

    /**
     * @description 页数，从1开始
     * @var int
     */
    public $page;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 每页数据量，默认10，最高50
     * @var int
     */
    public $pageSize;

    /**
     * @description 部门id
     * @var string
     */
    public $deptid;

    /**
     * @description 结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 更新结束时间
     * @var string
     */
    public $updateEndTime;

    /**
     * @description 更新开始时间
     * @var string
     */
    public $updateStartTime;

}
