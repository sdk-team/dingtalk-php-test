<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class approveList extends Model {
    protected $_name = [
        'durationUnit' => 'duration_unit',
        'duration' => 'duration',
        'subType' => 'sub_type',
        'tagName' => 'tag_name',
        'procInstId' => 'procInst_id',
        'beginTime' => 'begin_time',
        'bizType' => 'biz_type',
        'endTime' => 'end_time',
        'gmtFinished' => 'gmt_finished',
    ];
    public function validate() {
        Model::validatePattern('beginTime', $this->beginTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtFinished', $this->gmtFinished, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->durationUnit) {
            $res['duration_unit'] = $this->durationUnit;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->subType) {
            $res['sub_type'] = $this->subType;
        }
        if (null !== $this->tagName) {
            $res['tag_name'] = $this->tagName;
        }
        if (null !== $this->procInstId) {
            $res['procInst_id'] = $this->procInstId;
        }
        if (null !== $this->beginTime) {
            $res['begin_time'] = $this->beginTime;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->gmtFinished) {
            $res['gmt_finished'] = $this->gmtFinished;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return approveList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration_unit'])){
            $model->durationUnit = $map['duration_unit'];
        }
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['sub_type'])){
            $model->subType = $map['sub_type'];
        }
        if(isset($map['tag_name'])){
            $model->tagName = $map['tag_name'];
        }
        if(isset($map['procInst_id'])){
            $model->procInstId = $map['procInst_id'];
        }
        if(isset($map['begin_time'])){
            $model->beginTime = $map['begin_time'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['gmt_finished'])){
            $model->gmtFinished = $map['gmt_finished'];
        }
        return $model;
    }
    /**
     * @description 审批单的单位
     * @var string
     */
    public $durationUnit;

    /**
     * @description 时长
     * @var string
     */
    public $duration;

    /**
     * @description 子类型
     * @var string
     */
    public $subType;

    /**
     * @description 审批单的tag
     * @var string
     */
    public $tagName;

    /**
     * @description 审批单id
     * @var string
     */
    public $procInstId;

    /**
     * @description 审批单开始时间
     * @var string
     */
    public $beginTime;

    /**
     * @description 业务类型
     * @var int
     */
    public $bizType;

    /**
     * @description 审批单结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 审批单审批完成时间
     * @var string
     */
    public $gmtFinished;

}
