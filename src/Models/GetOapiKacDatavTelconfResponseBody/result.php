<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavTelconfResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'callCount' => 'call_count',
        'callDuration' => 'call_duration',
        'callJoinPv' => 'call_join_pv',
        'callDurationMin' => 'call_duration_min',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->callCount) {
            $res['call_count'] = $this->callCount;
        }
        if (null !== $this->callDuration) {
            $res['call_duration'] = $this->callDuration;
        }
        if (null !== $this->callJoinPv) {
            $res['call_join_pv'] = $this->callJoinPv;
        }
        if (null !== $this->callDurationMin) {
            $res['call_duration_min'] = $this->callDurationMin;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['call_count'])){
            $model->callCount = $map['call_count'];
        }
        if(isset($map['call_duration'])){
            $model->callDuration = $map['call_duration'];
        }
        if(isset($map['call_join_pv'])){
            $model->callJoinPv = $map['call_join_pv'];
        }
        if(isset($map['call_duration_min'])){
            $model->callDurationMin = $map['call_duration_min'];
        }
        return $model;
    }
    /**
     * @description 呼叫成功次数
     * @var int
     */
    public $callCount;

    /**
     * @description 呼叫成功时长(秒)
     * @var string
     */
    public $callDuration;

    /**
     * @description 呼叫参与人次
     * @var int
     */
    public $callJoinPv;

    /**
     * @description 呼叫成功时长(分钟)
     * @var string
     */
    public $callDurationMin;

}
