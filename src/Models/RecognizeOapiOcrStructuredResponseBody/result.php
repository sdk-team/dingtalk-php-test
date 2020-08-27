<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RecognizeOapiOcrStructuredResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'height' => 'height',
        'width' => 'width',
        'angle' => 'angle',
        'data' => 'data',
        'originalHeight' => 'original_height',
        'originalWidth' => 'original_width',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }
        if (null !== $this->angle) {
            $res['angle'] = $this->angle;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->originalHeight) {
            $res['original_height'] = $this->originalHeight;
        }
        if (null !== $this->originalWidth) {
            $res['original_width'] = $this->originalWidth;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['height'])){
            $model->height = $map['height'];
        }
        if(isset($map['width'])){
            $model->width = $map['width'];
        }
        if(isset($map['angle'])){
            $model->angle = $map['angle'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        if(isset($map['original_height'])){
            $model->originalHeight = $map['original_height'];
        }
        if(isset($map['original_width'])){
            $model->originalWidth = $map['original_width'];
        }
        return $model;
    }
    /**
     * @description 旋转后图片高度
     * @var int
     */
    public $height;

    /**
     * @description 旋转后图片宽度
     * @var int
     */
    public $width;

    /**
     * @description 旋转度
     * @var int
     */
    public $angle;

    /**
     * @description 图片识别内容json字符串，不同的类型有不同的字段，例如身份证{"姓名":"王xx","性别":"男","民族":"汉","出生日期":"1986年1月9日","住址":"四川省攀枝xxxx","身份证号码":"5101241988xxxxx"}
     * @var string
     */
    public $data;

    /**
     * @description 原始图片高度
     * @var int
     */
    public $originalHeight;

    /**
     * @description 原始图片宽度
     * @var int
     */
    public $originalWidth;

}
