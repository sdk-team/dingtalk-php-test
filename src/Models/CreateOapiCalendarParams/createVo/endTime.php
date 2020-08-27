<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCalendarParams\createVo;

use AlibabaCloud\Tea\Model;

class endTime extends Model {
    protected $_name = [
        'unixTimestamp' => 'unix_timestamp',
        'timezone' => 'timezone',
    ];
    public function validate() {
        Model::validateRequired('unixTimestamp', $this->unixTimestamp, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unixTimestamp) {
            $res['unix_timestamp'] = $this->unixTimestamp;
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return endTime
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unix_timestamp'])){
            $model->unixTimestamp = $map['unix_timestamp'];
        }
        if(isset($map['timezone'])){
            $model->timezone = $map['timezone'];
        }
        return $model;
    }
    /**
     * @description 结束的unix时间戳(单位:毫秒)
     * @var int
     */
    public $unixTimestamp;

    /**
     * @description 时区
     * @var string
     */
    public $timezone;

}
