<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbytimeOapiLiveGroupliveResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'duration' => 'duration',
        'startTime' => 'start_time',
        'title' => 'title',
        'userid' => 'userid',
        'liveUuid' => 'live_uuid',
        'shareFrom' => 'share_from',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->liveUuid) {
            $res['live_uuid'] = $this->liveUuid;
        }
        if (null !== $this->shareFrom) {
            $res['share_from'] = $this->shareFrom;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['live_uuid'])){
            $model->liveUuid = $map['live_uuid'];
        }
        if(isset($map['share_from'])){
            $model->shareFrom = $map['share_from'];
        }
        return $model;
    }
    /**
     * @description 直播时长
     * @var int
     */
    public $duration;

    /**
     * @description 直播开始时间
     * @var int
     */
    public $startTime;

    /**
     * @description 直播标题
     * @var string
     */
    public $title;

    /**
     * @description 主播userId
     * @var string
     */
    public $userid;

    /**
     * @description 直播id
     * @var string
     */
    public $liveUuid;

    /**
     * @description true为被联播群，false为主群
     * @var bool
     */
    public $shareFrom;

}
