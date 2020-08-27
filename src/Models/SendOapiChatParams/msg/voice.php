<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg;

use AlibabaCloud\Tea\Model;

class voice extends Model {
    protected $_name = [
        'mediaId' => 'media_id',
        'duration' => 'duration',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return voice
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        return $model;
    }
    /**
     * @description 媒体文件id。2MB，播放长度不超过60s，AMR格式
     * @var string
     */
    public $mediaId;

    /**
     * @description 正整数，小于60，表示音频时长
     * @var int
     */
    public $duration;

}
