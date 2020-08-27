<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request;

use AlibabaCloud\Tea\Model;

class customSetting extends Model {
    protected $_name = [
        'replyTime' => 'reply_time',
        'formType' => 'form_type',
        'bizType' => 'biz_type',
        'loopDayOfWeeks' => 'loop_day_of_weeks',
        'endTime' => 'end_time',
        'loopTime' => 'loop_time',
    ];
    public function validate() {
        Model::validateRequired('formType', $this->formType, true);
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->replyTime) {
            $res['reply_time'] = $this->replyTime;
        }
        if (null !== $this->formType) {
            $res['form_type'] = $this->formType;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->loopDayOfWeeks) {
            $res['loop_day_of_weeks'] = $this->loopDayOfWeeks;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->loopTime) {
            $res['loop_time'] = $this->loopTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return customSetting
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['reply_time'])){
            $model->replyTime = $map['reply_time'];
        }
        if(isset($map['form_type'])){
            $model->formType = $map['form_type'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['loop_day_of_weeks'])){
            if(!empty($map['loop_day_of_weeks'])){
                $model->loopDayOfWeeks = $map['loop_day_of_weeks'];
            }
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['loop_time'])){
            $model->loopTime = $map['loop_time'];
        }
        return $model;
    }
    /**
     * @description 回复时间开关/循环周期启用
     * @var bool
     */
    public $replyTime;

    /**
     * @description 表单类型
     * @var int
     */
    public $formType;

    /**
     * @description 业务类型
     * @var int
     */
    public $bizType;

    /**
     * @description 循环周期
     * @var array
     */
    public $loopDayOfWeeks;

    /**
     * @description 填写结束时间/循环表单的循环结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 提醒时间
     * @var string
     */
    public $loopTime;

}
