<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams;

use AlibabaCloud\Tea\Model;

class image extends Model {
    protected $_name = [
        'mediaId' => 'media_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return image
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        return $model;
    }
    /**
     * @description 图片mediaId
     * @var string
     */
    public $mediaId;

}
