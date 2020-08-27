<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCollectionFormResponseBody\result;

use AlibabaCloud\Tea\Model;

class setting extends Model {
    protected $_name = [
        'formType' => 'form_type',
        'loopTime' => 'loop_time',
        'loopDays' => 'loop_days',
        'shouldParticipationCnt' => 'should_participation_cnt',
        'endTime' => 'end_time',
        'createTime' => 'create_time',
        'bizType' => 'biz_type',
        'stop' => 'stop',
    ];
    public function validate() {
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('createTime', $this->createTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->formType) {
            $res['form_type'] = $this->formType;
        }
        if (null !== $this->loopTime) {
            $res['loop_time'] = $this->loopTime;
        }
        if (null !== $this->loopDays) {
            $res['loop_days'] = $this->loopDays;
        }
        if (null !== $this->shouldParticipationCnt) {
            $res['should_participation_cnt'] = $this->shouldParticipationCnt;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->stop) {
            $res['stop'] = $this->stop;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return setting
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_type'])){
            $model->formType = $map['form_type'];
        }
        if(isset($map['loop_time'])){
            $model->loopTime = $map['loop_time'];
        }
        if(isset($map['loop_days'])){
            if(!empty($map['loop_days'])){
                $model->loopDays = $map['loop_days'];
            }
        }
        if(isset($map['should_participation_cnt'])){
            $model->shouldParticipationCnt = $map['should_participation_cnt'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['stop'])){
            $model->stop = $map['stop'];
        }
        return $model;
    }
    /**
     * @description 是否循环填表
     * @var int
     */
    public $formType;

    /**
     * @description 填表时间
     * @var string
     */
    public $loopTime;

    /**
     * @description 填表周期，周一到周日分别用1-7表示
     * @var array
     */
    public $loopDays;

    /**
     * @description 应填人数
     * @var int
     */
    public $shouldParticipationCnt;

    /**
     * @description 填表截止时间
     * @var string
     */
    public $endTime;

    /**
     * @description 创建时间
     * @var string
     */
    public $createTime;

    /**
     * @description 表单类型
     * @var int
     */
    public $bizType;

    /**
     * @description 填表是否终止的标记
     * @var bool
     */
    public $stop;

}
