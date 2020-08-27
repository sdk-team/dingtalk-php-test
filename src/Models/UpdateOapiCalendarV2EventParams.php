<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCalendarV2EventParams\event;

class UpdateOapiCalendarV2EventParams extends Model {
    protected $_name = [
        'event' => 'event',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('event', $this->event, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->event) {
            $res['event'] = null !== $this->event ? $this->event->toMap() : null;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiCalendarV2EventParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['event'])){
            $model->event = event::fromMap($map['event']);
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 日程创建对象
     * @var event
     */
    public $event;

    /**
     * @description 开放平台应用对应的AgentId
     * @var int
     */
    public $agentid;

}
