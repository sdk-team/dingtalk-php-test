<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateservicetimeOapiCcoserviceServicegroupParams extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'timeType' => 'time_type',
    ];
    public function validate() {
        Model::validateRequired('openConversationId', $this->openConversationId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->timeType) {
            $res['time_type'] = $this->timeType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateservicetimeOapiCcoserviceServicegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['time_type'])){
            $model->timeType = $map['time_type'];
        }
        return $model;
    }
    /**
     * @description 群加密id
     * @var string
     */
    public $openConversationId;

    /**
     * @description 服务开始时间
     * @var string
     */
    public $startTime;

    /**
     * @description 服务结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 日期类型,0-工作日;1-每日;99-端上不显示
     * @var int
     */
    public $timeType;

}
