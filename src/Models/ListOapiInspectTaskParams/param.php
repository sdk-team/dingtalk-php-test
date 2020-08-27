<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiInspectTaskParams;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'size' => 'size',
        'cursor' => 'cursor',
        'status' => 'status',
        'endDate' => 'end_date',
        'startDate' => 'start_date',
        'deptId' => 'dept_id',
    ];
    public function validate() {
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('deptId', $this->deptId, true);
        Model::validateMaxLength('size', $this->size, 50);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['status'])){
            if(!empty($map['status'])){
                $model->status = $map['status'];
            }
        }
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 分页请求数量，最大值50
     * @var int
     */
    public $size;

    /**
     * @description 游标，从返回结果中获取，第一次请求可为空
     * @var int
     */
    public $cursor;

    /**
     * @description 请求的状态列表，1已签到，2已正常签退，3已异常签退
     * @var array
     */
    public $status;

    /**
     * @description 请求开始时间，时间戳，单位毫秒
     * @var int
     */
    public $endDate;

    /**
     * @description 请求结束时间，时间戳，单位毫秒
     * @var int
     */
    public $startDate;

    /**
     * @description 部门id，从通讯录接口获取
     * @var string
     */
    public $deptId;

}
