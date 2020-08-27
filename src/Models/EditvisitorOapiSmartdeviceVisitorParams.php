<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\EditvisitorOapiSmartdeviceVisitorParams\visitorVo;

class EditvisitorOapiSmartdeviceVisitorParams extends Model {
    protected $_name = [
        'reservationId' => 'reservation_id',
        'visitorVo' => 'visitor_vo',
    ];
    public function validate() {
        Model::validateRequired('reservationId', $this->reservationId, true);
        Model::validateRequired('visitorVo', $this->visitorVo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->reservationId) {
            $res['reservation_id'] = $this->reservationId;
        }
        if (null !== $this->visitorVo) {
            $res['visitor_vo'] = null !== $this->visitorVo ? $this->visitorVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return EditvisitorOapiSmartdeviceVisitorParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['reservation_id'])){
            $model->reservationId = $map['reservation_id'];
        }
        if(isset($map['visitor_vo'])){
            $model->visitorVo = visitorVo::fromMap($map['visitor_vo']);
        }
        return $model;
    }
    /**
     * @description 预约编号
     * @var string
     */
    public $reservationId;

    /**
     * @description 预约数据
     * @var visitorVo
     */
    public $visitorVo;

}
