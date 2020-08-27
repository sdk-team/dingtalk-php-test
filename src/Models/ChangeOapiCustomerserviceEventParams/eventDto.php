<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ChangeOapiCustomerserviceEventParams;

use AlibabaCloud\Tea\Model;

class eventDto extends Model {
    protected $_name = [
        'eventCode' => 'event_code',
        'eventId' => 'event_id',
        'bizType' => 'biz_type',
        'buId' => 'bu_id',
        'source' => 'source',
        'eventBody' => 'event_body',
    ];
    public function validate() {
        Model::validateRequired('eventCode', $this->eventCode, true);
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('buId', $this->buId, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('eventBody', $this->eventBody, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->eventCode) {
            $res['event_code'] = $this->eventCode;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->buId) {
            $res['bu_id'] = $this->buId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->eventBody) {
            $res['event_body'] = $this->eventBody;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return eventDto
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['event_code'])){
            $model->eventCode = $map['event_code'];
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['bu_id'])){
            $model->buId = $map['bu_id'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        if(isset($map['event_body'])){
            $model->eventBody = $map['event_body'];
        }
        return $model;
    }
    /**
     * @description 事件code，参考com.dingtalk.customerservice.common.EventBizTypeEnum
     * @var string
     */
    public $eventCode;

    /**
     * @description 事件的唯一性id，用于幂等
     * @var string
     */
    public $eventId;

    /**
     * @description 事件业务类型，参考com.dingtalk.customerservice.common.EventBizTypeEnum
     * @var string
     */
    public $bizType;

    /**
     * @description buId(租户id)
     * @var string
     */
    public $buId;

    /**
     * @description 事件来源，com.dingtalk.customerservice.common.SourceEnum
     * @var string
     */
    public $source;

    /**
     * @description 事件变更内容，json格式
     * @var string
     */
    public $eventBody;

}
