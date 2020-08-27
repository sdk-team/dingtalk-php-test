<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiLiveResponseBody\result;

use AlibabaCloud\Tea\Model;

class liveUrlExt extends Model {
    protected $_name = [
        'liveUrlHigh' => 'live_url_high',
        'liveUrlNormal' => 'live_url_normal',
        'liveUrlLow' => 'live_url_low',
        'liveUrlVeryLow' => 'live_url_very_low',
        'liveUrlUltraLow' => 'live_url_ultra_low',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->liveUrlHigh) {
            $res['live_url_high'] = $this->liveUrlHigh;
        }
        if (null !== $this->liveUrlNormal) {
            $res['live_url_normal'] = $this->liveUrlNormal;
        }
        if (null !== $this->liveUrlLow) {
            $res['live_url_low'] = $this->liveUrlLow;
        }
        if (null !== $this->liveUrlVeryLow) {
            $res['live_url_very_low'] = $this->liveUrlVeryLow;
        }
        if (null !== $this->liveUrlUltraLow) {
            $res['live_url_ultra_low'] = $this->liveUrlUltraLow;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return liveUrlExt
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['live_url_high'])){
            $model->liveUrlHigh = $map['live_url_high'];
        }
        if(isset($map['live_url_normal'])){
            $model->liveUrlNormal = $map['live_url_normal'];
        }
        if(isset($map['live_url_low'])){
            $model->liveUrlLow = $map['live_url_low'];
        }
        if(isset($map['live_url_very_low'])){
            $model->liveUrlVeryLow = $map['live_url_very_low'];
        }
        if(isset($map['live_url_ultra_low'])){
            $model->liveUrlUltraLow = $map['live_url_ultra_low'];
        }
        return $model;
    }
    /**
     * @description 播放地址flv,超清-720p
     * @var string
     */
    public $liveUrlHigh;

    /**
     * @description 播放地址flv,高清-480p
     * @var string
     */
    public $liveUrlNormal;

    /**
     * @description 播放地址flv,标清-360p
     * @var string
     */
    public $liveUrlLow;

    /**
     * @description 播放地址flv,流畅
     * @var string
     */
    public $liveUrlVeryLow;

    /**
     * @description 播放地址flv,极速
     * @var string
     */
    public $liveUrlUltraLow;

}
