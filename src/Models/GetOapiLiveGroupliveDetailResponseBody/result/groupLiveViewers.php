<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiLiveGroupliveDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class groupLiveViewers extends Model {
    protected $_name = [
        'playRecordDuration' => 'play_record_duration',
        'playDuration' => 'play_duration',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->playRecordDuration) {
            $res['play_record_duration'] = $this->playRecordDuration;
        }
        if (null !== $this->playDuration) {
            $res['play_duration'] = $this->playDuration;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return groupLiveViewers
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['play_record_duration'])){
            $model->playRecordDuration = $map['play_record_duration'];
        }
        if(isset($map['play_duration'])){
            $model->playDuration = $map['play_duration'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 回放观看时长
     * @var int
     */
    public $playRecordDuration;

    /**
     * @description 直播观看时长
     * @var int
     */
    public $playDuration;

    /**
     * @description 观看用户userid
     * @var string
     */
    public $userid;

}
