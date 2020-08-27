<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatisticsOapiLiveGroupliveResponseBody\result;

use AlibabaCloud\Tea\Model;

class groupLiveViewers extends Model {
    protected $_name = [
        'openId' => 'open_id',
        'playDuration' => 'play_duration',
        'playRecordDuration' => 'play_record_duration',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->openId) {
            $res['open_id'] = $this->openId;
        }
        if (null !== $this->playDuration) {
            $res['play_duration'] = $this->playDuration;
        }
        if (null !== $this->playRecordDuration) {
            $res['play_record_duration'] = $this->playRecordDuration;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return groupLiveViewers
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_id'])){
            $model->openId = $map['open_id'];
        }
        if(isset($map['play_duration'])){
            $model->playDuration = $map['play_duration'];
        }
        if(isset($map['play_record_duration'])){
            $model->playRecordDuration = $map['play_record_duration'];
        }
        return $model;
    }
    /**
     * @description openid
     * @var int
     */
    public $openId;

    /**
     * @description 直播时长
     * @var int
     */
    public $playDuration;

    /**
     * @description 回放时长
     * @var int
     */
    public $playRecordDuration;

}
