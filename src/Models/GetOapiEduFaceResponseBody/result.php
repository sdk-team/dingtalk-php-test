<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduFaceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'hasRecordFace' => 'has_record_face',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasRecordFace) {
            $res['has_record_face'] = $this->hasRecordFace;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_record_face'])){
            $model->hasRecordFace = $map['has_record_face'];
        }
        return $model;
    }
    /**
     * @description 是否录入过人脸
     * @var bool
     */
    public $hasRecordFace;

}
