<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RemovevisitorOapiSmartdeviceVisitorParams extends Model {
    protected $_name = [
        'reservationId' => 'reservation_id',
    ];
    public function validate() {
        Model::validateRequired('reservationId', $this->reservationId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->reservationId) {
            $res['reservation_id'] = $this->reservationId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemovevisitorOapiSmartdeviceVisitorParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['reservation_id'])){
            $model->reservationId = $map['reservation_id'];
        }
        return $model;
    }
    /**
     * @description 预约编号
     * @var string
     */
    public $reservationId;

}
