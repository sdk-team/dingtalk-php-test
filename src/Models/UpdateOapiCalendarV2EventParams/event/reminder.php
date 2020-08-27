<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCalendarV2EventParams\event;

use AlibabaCloud\Tea\Model;

class reminder extends Model {
    protected $_name = [
        'method' => 'method',
        'minutes' => 'minutes',
    ];
    public function validate() {
        Model::validateMaxLength('method', $this->method, 16);
        Model::validateMaximum('minutes', $this->minutes, 1600);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->minutes) {
            $res['minutes'] = $this->minutes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return reminder
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['method'])){
            $model->method = $map['method'];
        }
        if(isset($map['minutes'])){
            $model->minutes = $map['minutes'];
        }
        return $model;
    }
    /**
     * @description 提醒方式.app表示应用内提醒
     * @var string
     */
    public $method;

    /**
     * @description 开始前提醒的分钟数,有效值为0，5，15，30，60，1440
     * @var int
     */
    public $minutes;

}
