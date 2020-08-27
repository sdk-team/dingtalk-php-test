<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbytimeOapiLiveGroupliveParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'deptId' => 'dept_id',
    ];
    public function validate() {
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('deptId', $this->deptId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 结束时间，单位秒
     * @var int
     */
    public $endTime;

    /**
     * @description 开始时间，单位秒
     * @var int
     */
    public $startTime;

    /**
     * @description 直播所属群对应的部门
     * @var int
     */
    public $deptId;

}
