<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripApplyParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'gmtModified' => 'gmt_modified',
        'pageSize' => 'page_size',
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'page' => 'page',
        'userid' => 'userid',
        'deptid' => 'deptid',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('startTime', $this->startTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->deptid) {
            $res['deptid'] = $this->deptid;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['deptid'])){
            $model->deptid = $map['deptid'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 更新时间大于等于此时间的审批单
     * @var string
     */
    public $gmtModified;

    /**
     * @description 每页返回数量，默认10，最多50
     * @var int
     */
    public $pageSize;

    /**
     * @description 结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 开始时间
     * @var string
     */
    public $startTime;

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
     * @description 部门id
     * @var string
     */
    public $deptid;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
