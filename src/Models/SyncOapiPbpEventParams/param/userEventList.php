<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiPbpEventParams\param;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiPbpEventParams\param\userEventList\positionList;

class userEventList extends Model {
    protected $_name = [
        'userid' => 'userid',
        'eventName' => 'event_name',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'eventTimeStamp' => 'event_time_stamp',
        'positionList' => 'position_list',
        'bizInstId' => 'biz_inst_id',
        'eventId' => 'event_id',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('eventName', $this->eventName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('eventTimeStamp', $this->eventTimeStamp, true);
        Model::validateRequired('positionList', $this->positionList, true);
        Model::validateRequired('bizInstId', $this->bizInstId, true);
        Model::validateRequired('eventId', $this->eventId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->eventName) {
            $res['event_name'] = $this->eventName;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->eventTimeStamp) {
            $res['event_time_stamp'] = $this->eventTimeStamp;
        }
        if (null !== $this->positionList) {
            $res['position_list'] = [];
            if(null !== $this->positionList && is_array($this->positionList)){
                $n = 0;
                foreach($this->positionList as $item){
                    $res['position_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizInstId) {
            $res['biz_inst_id'] = $this->bizInstId;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userEventList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['event_name'])){
            $model->eventName = $map['event_name'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['event_time_stamp'])){
            $model->eventTimeStamp = $map['event_time_stamp'];
        }
        if(isset($map['position_list'])){
            if(!empty($map['position_list'])){
                $model->positionList = [];
                $n = 0;
                foreach($map['position_list'] as $item) {
                    $model->positionList[$n++] = null !== $item ? positionList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['biz_inst_id'])){
            $model->bizInstId = $map['biz_inst_id'];
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 打卡事件名称
     * @var string
     */
    public $eventName;

    /**
     * @description 打卡事件结束时间，单位毫秒
     * @var int
     */
    public $startTime;

    /**
     * @description 打卡事件开始时间，单位毫秒
     * @var int
     */
    public $endTime;

    /**
     * @description 打卡事件生成时间戳，单位毫秒
     * @var int
     */
    public $eventTimeStamp;

    /**
     * @description 位置列表
     * @var array
     */
    public $positionList;

    /**
     * @description 打卡业务实例id
     * @var string
     */
    public $bizInstId;

    /**
     * @description 打卡事件外部id，唯一键
     * @var string
     */
    public $eventId;

}
