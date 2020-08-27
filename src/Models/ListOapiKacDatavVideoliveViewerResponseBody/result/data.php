<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavVideoliveViewerResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'playDuration' => 'play_duration',
        'playDurationMin' => 'play_duration_min',
        'playRecordDuration' => 'play_record_duration',
        'playRecordDurationMin' => 'play_record_duration_min',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->playDuration) {
            $res['play_duration'] = $this->playDuration;
        }
        if (null !== $this->playDurationMin) {
            $res['play_duration_min'] = $this->playDurationMin;
        }
        if (null !== $this->playRecordDuration) {
            $res['play_record_duration'] = $this->playRecordDuration;
        }
        if (null !== $this->playRecordDurationMin) {
            $res['play_record_duration_min'] = $this->playRecordDurationMin;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['play_duration'])){
            $model->playDuration = $map['play_duration'];
        }
        if(isset($map['play_duration_min'])){
            $model->playDurationMin = $map['play_duration_min'];
        }
        if(isset($map['play_record_duration'])){
            $model->playRecordDuration = $map['play_record_duration'];
        }
        if(isset($map['play_record_duration_min'])){
            $model->playRecordDurationMin = $map['play_record_duration_min'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 观看直播时长（毫秒）
     * @var int
     */
    public $playDuration;

    /**
     * @description 观看直播时长（分钟）
     * @var string
     */
    public $playDurationMin;

    /**
     * @description 观看直播回放时长（毫秒）
     * @var int
     */
    public $playRecordDuration;

    /**
     * @description 观看直播回放时长（分钟）
     * @var string
     */
    public $playRecordDurationMin;

    /**
     * @description 员工在当前企业内的唯一标识，也称staffId。可由企业在创建时指定，并代表一定含义比如工号，创建后不可修改
     * @var string
     */
    public $userid;

}
