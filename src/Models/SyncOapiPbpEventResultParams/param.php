<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiPbpEventResultParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiPbpEventResultParams\param\punchPosition;

class param extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'userid' => 'userid',
        'result' => 'result',
        'invalidEvent' => 'invalid_event',
        'punchPosition' => 'punch_position',
        'eventId' => 'event_id',
        'bizInstId' => 'biz_inst_id',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('result', $this->result, true);
        Model::validateRequired('invalidEvent', $this->invalidEvent, true);
        Model::validateRequired('punchPosition', $this->punchPosition, true);
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('bizInstId', $this->bizInstId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->invalidEvent) {
            $res['invalid_event'] = $this->invalidEvent;
        }
        if (null !== $this->punchPosition) {
            $res['punch_position'] = null !== $this->punchPosition ? $this->punchPosition->toMap() : null;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        if (null !== $this->bizInstId) {
            $res['biz_inst_id'] = $this->bizInstId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        if(isset($map['invalid_event'])){
            $model->invalidEvent = $map['invalid_event'];
        }
        if(isset($map['punch_position'])){
            $model->punchPosition = punchPosition::fromMap($map['punch_position']);
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        if(isset($map['biz_inst_id'])){
            $model->bizInstId = $map['biz_inst_id'];
        }
        return $model;
    }
    /**
     * @description 打卡业务代码
     * @var string
     */
    public $bizCode;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 打卡事件结果，2:成功，3:失败
     * @var int
     */
    public $result;

    /**
     * @description 是否失效当前事件，不可重复打卡:true，可重复打卡:false
     * @var bool
     */
    public $invalidEvent;

    /**
     * @description 打卡成功的位置信息
     * @var punchPosition
     */
    public $punchPosition;

    /**
     * @description 打卡事件外部id，唯一键
     * @var string
     */
    public $eventId;

    /**
     * @description 打卡业务实例id
     * @var string
     */
    public $bizInstId;

}
