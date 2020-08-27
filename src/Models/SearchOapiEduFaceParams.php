<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SearchOapiEduFaceParams extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'url' => 'url',
        'width' => 'width',
        'height' => 'height',
        'userid' => 'userid',
        'synchronous' => 'synchronous',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('url', $this->url, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->synchronous) {
            $res['synchronous'] = $this->synchronous;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiEduFaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['width'])){
            $model->width = $map['width'];
        }
        if(isset($map['height'])){
            $model->height = $map['height'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['synchronous'])){
            $model->synchronous = $map['synchronous'];
        }
        return $model;
    }
    /**
     * @description 班级id
     * @var int
     */
    public $classId;

    /**
     * @description https://img.alicdn.com/tfs/TB1._LRfUz1gK0jSZLeXXb9kVXa-36-32.png
     * @var string
     */
    public $url;

    /**
     * @description 图片宽度，同步调用时候必须
     * @var int
     */
    public $width;

    /**
     * @description 图片宽度，同步调用时候必须
     * @var int
     */
    public $height;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 是否同步调用，默认不同步
     * @var bool
     */
    public $synchronous;

}
