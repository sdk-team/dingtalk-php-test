<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams;

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
     * @description 语音时长
     * @var int
     */
    public $duration;

    /**
     * @description 语音媒体文件id，可以调用上传媒体文件接口获取。2MB，播放长度不超过60s，AMR格式
     * @var string
     */
    public $mediaId;

}
