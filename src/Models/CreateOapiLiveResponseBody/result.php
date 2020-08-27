<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiLiveResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiLiveResponseBody\result\liveUrlExt;

class result extends Model {
    protected $_name = [
        'playbackUrl' => 'playback_url',
        'liveUrlHls' => 'live_url_hls',
        'liveUrlExt' => 'live_url_ext',
        'liveUrl' => 'live_url',
        'inputStreamUrl' => 'input_stream_url',
        'appointmentTime' => 'appointment_time',
        'uuid' => 'uuid',
    ];
    public function validate() {
        Model::validatePattern('appointmentTime', $this->appointmentTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->playbackUrl) {
            $res['playback_url'] = $this->playbackUrl;
        }
        if (null !== $this->liveUrlHls) {
            $res['live_url_hls'] = $this->liveUrlHls;
        }
        if (null !== $this->liveUrlExt) {
            $res['live_url_ext'] = null !== $this->liveUrlExt ? $this->liveUrlExt->toMap() : null;
        }
        if (null !== $this->liveUrl) {
            $res['live_url'] = $this->liveUrl;
        }
        if (null !== $this->inputStreamUrl) {
            $res['input_stream_url'] = $this->inputStreamUrl;
        }
        if (null !== $this->appointmentTime) {
            $res['appointment_time'] = $this->appointmentTime;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['playback_url'])){
            $model->playbackUrl = $map['playback_url'];
        }
        if(isset($map['live_url_hls'])){
            $model->liveUrlHls = $map['live_url_hls'];
        }
        if(isset($map['live_url_ext'])){
            $model->liveUrlExt = liveUrlExt::fromMap($map['live_url_ext']);
        }
        if(isset($map['live_url'])){
            $model->liveUrl = $map['live_url'];
        }
        if(isset($map['input_stream_url'])){
            $model->inputStreamUrl = $map['input_stream_url'];
        }
        if(isset($map['appointment_time'])){
            $model->appointmentTime = $map['appointment_time'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        return $model;
    }
    /**
     * @description 直播回放地址
     * @var string
     */
    public $playbackUrl;

    /**
     * @description 原始HLS直播地址
     * @var string
     */
    public $liveUrlHls;

    /**
     * @description 转码直播地址
     * @var liveUrlExt
     */
    public $liveUrlExt;

    /**
     * @description 原始直播地址
     * @var string
     */
    public $liveUrl;

    /**
     * @description 推流地址
     * @var string
     */
    public $inputStreamUrl;

    /**
     * @description 预约直播时间
     * @var string
     */
    public $appointmentTime;

    /**
     * @description 直播UUID
     * @var string
     */
    public $uuid;

}
