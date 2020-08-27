<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg;

use AlibabaCloud\Tea\Model;

class voice extends Model {
    protected $_name = [
        'duration' => 'duration',
        'mediaId' => 'media_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return voice
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        return $model;
    }
    /**
     * @description 正整数，小于60，表示音频时长
     * @var string
     */
    public $duration;

    /**
     * @description 媒体文件id。2MB，播放长度不超过60s，AMR格式
     * @var string
     */
    public $mediaId;

}
