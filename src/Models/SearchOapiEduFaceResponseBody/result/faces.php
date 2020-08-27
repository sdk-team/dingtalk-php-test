<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiEduFaceResponseBody\result;

use AlibabaCloud\Tea\Model;

class faces extends Model {
    protected $_name = [
        'score' => 'score',
        'tagId' => 'tag_id',
        'faceType' => 'face_type',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->tagId) {
            $res['tag_id'] = $this->tagId;
        }
        if (null !== $this->faceType) {
            $res['face_type'] = $this->faceType;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return faces
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['score'])){
            $model->score = $map['score'];
        }
        if(isset($map['tag_id'])){
            $model->tagId = $map['tag_id'];
        }
        if(isset($map['face_type'])){
            $model->faceType = $map['face_type'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 人脸相似度
     * @var string
     */
    public $score;

    /**
     * @description 标签id
     * @var string
     */
    public $tagId;

    /**
     * @description 来自录入还是标记
     * @var string
     */
    public $faceType;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

}
