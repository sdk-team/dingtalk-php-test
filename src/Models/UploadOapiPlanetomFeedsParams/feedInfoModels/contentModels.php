<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UploadOapiPlanetomFeedsParams\feedInfoModels;

use AlibabaCloud\Tea\Model;

class contentModels extends Model {
    protected $_name = [
        'videoUrl' => 'video_url',
        'feedType' => 'feed_type',
        'title' => 'title',
    ];
    public function validate() {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('feedType', $this->feedType, true);
        Model::validateRequired('title', $this->title, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->videoUrl) {
            $res['video_url'] = $this->videoUrl;
        }
        if (null !== $this->feedType) {
            $res['feed_type'] = $this->feedType;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return contentModels
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['video_url'])){
            $model->videoUrl = $map['video_url'];
        }
        if(isset($map['feed_type'])){
            $model->feedType = $map['feed_type'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 视频下载地址
     * @var string
     */
    public $videoUrl;

    /**
     * @description 内容类型 2 视频 3 音频
     * @var int
     */
    public $feedType;

    /**
     * @description 内容标题
     * @var string
     */
    public $title;

}
