<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ChangeOapiCustomerserviceEventParams\eventDto;

class ChangeOapiCustomerserviceEventParams extends Model {
    protected $_name = [
        'eventDto' => 'event_dto',
    ];
    public function validate() {
        Model::validateRequired('eventDto', $this->eventDto, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->eventDto) {
            $res['event_dto'] = null !== $this->eventDto ? $this->eventDto->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ChangeOapiCustomerserviceEventParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['event_dto'])){
            $model->eventDto = eventDto::fromMap($map['event_dto']);
        }
        return $model;
    }
    /**
     * @description 事件对象
     * @var eventDto
     */
    public $eventDto;

}
