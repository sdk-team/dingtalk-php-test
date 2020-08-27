<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCalendarParams\createVo;

use AlibabaCloud\Tea\Model;

class reminder extends Model {
    protected $_name = [
        'minutes' => 'minutes',
        'remindType' => 'remind_type',
    ];
    public function validate() {
        Model::validateMaximum('minutes', $this->minutes, 2880);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->minutes) {
            $res['minutes'] = $this->minutes;
        }
        if (null !== $this->remindType) {
            $res['remind_type'] = $this->remindType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return reminder
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['minutes'])){
            $model->minutes = $map['minutes'];
        }
        if(isset($map['remind_type'])){
            $model->remindType = $map['remind_type'];
        }
        return $model;
    }
    /**
     * @description 距开始时多久进行提醒(单位:分钟)
     * @var int
     */
    public $minutes;

    /**
     * @description 提醒类型:app-应用内;
     * @var string
     */
    public $remindType;

}
