<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleaveapprovedurationSmartworkAttendsResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'durationInMinutes' => 'duration_in_minutes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->durationInMinutes) {
            $res['duration_in_minutes'] = $this->durationInMinutes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration_in_minutes'])){
            $model->durationInMinutes = $map['duration_in_minutes'];
        }
        return $model;
    }
    /**
     * @description 请假时长（单位分钟）
     * @var int
     */
    public $durationInMinutes;

}
