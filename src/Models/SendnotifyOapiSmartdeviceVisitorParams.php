<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendnotifyOapiSmartdeviceVisitorParams\visitorNotifyVo;

class SendnotifyOapiSmartdeviceVisitorParams extends Model {
    protected $_name = [
        'visitorNotifyVo' => 'visitor_notify_vo',
        'reservationId' => 'reservation_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->visitorNotifyVo) {
            $res['visitor_notify_vo'] = null !== $this->visitorNotifyVo ? $this->visitorNotifyVo->toMap() : null;
        }
        if (null !== $this->reservationId) {
            $res['reservation_id'] = $this->reservationId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendnotifyOapiSmartdeviceVisitorParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['visitor_notify_vo'])){
            $model->visitorNotifyVo = visitorNotifyVo::fromMap($map['visitor_notify_vo']);
        }
        if(isset($map['reservation_id'])){
            $model->reservationId = $map['reservation_id'];
        }
        return $model;
    }
    /**
     * @description 访客通知模型
     * @var visitorNotifyVo
     */
    public $visitorNotifyVo;

    /**
     * @description 预约ID
     * @var string
     */
    public $reservationId;

}
