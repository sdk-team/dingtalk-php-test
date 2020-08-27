<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiLiveGroupliveResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'isLandscape' => 'is_landscape',
        'cid' => 'cid',
        'liveUuid' => 'live_uuid',
        'openId' => 'open_id',
        'title' => 'title',
        'startTime' => 'start_time',
        'duration' => 'duration',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->isLandscape) {
            $res['is_landscape'] = $this->isLandscape;
        }
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        if (null !== $this->liveUuid) {
            $res['live_uuid'] = $this->liveUuid;
        }
        if (null !== $this->openId) {
            $res['open_id'] = $this->openId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['is_landscape'])){
            $model->isLandscape = $map['is_landscape'];
        }
        if(isset($map['cid'])){
            $model->cid = $map['cid'];
        }
        if(isset($map['live_uuid'])){
            $model->liveUuid = $map['live_uuid'];
        }
        if(isset($map['open_id'])){
            $model->openId = $map['open_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        return $model;
    }
    /**
     * @description 是否横屏
     * @var bool
     */
    public $isLandscape;

    /**
     * @description 群id
     * @var int
     */
    public $cid;

    /**
     * @description 直播id
     * @var string
     */
    public $liveUuid;

    /**
     * @description openid
     * @var int
     */
    public $openId;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 开始时间ms
     * @var int
     */
    public $startTime;

    /**
     * @description 时长
     * @var int
     */
    public $duration;

}
