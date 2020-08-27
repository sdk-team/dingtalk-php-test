<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RecognitionOapiAttendanceFaceParams extends Model {
    protected $_name = [
        'mediaId' => 'media_id',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RecognitionOapiAttendanceFaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        return $model;
    }
    /**
     * @description 钉钉mediaId
     * @var string
     */
    public $mediaId;

}
