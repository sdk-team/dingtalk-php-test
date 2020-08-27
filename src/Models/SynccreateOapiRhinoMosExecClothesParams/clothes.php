<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SynccreateOapiRhinoMosExecClothesParams;

use AlibabaCloud\Tea\Model;

class clothes extends Model {
    protected $_name = [
        'colorCode' => 'color_code',
        'colorName' => 'color_name',
        'sizeCode' => 'size_code',
        'sizeName' => 'size_name',
        'count' => 'count',
        'finishTime' => 'finish_time',
        'startTime' => 'start_time',
    ];
    public function validate() {
        Model::validateRequired('sizeCode', $this->sizeCode, true);
        Model::validatePattern('finishTime', $this->finishTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('startTime', $this->startTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->colorCode) {
            $res['color_code'] = $this->colorCode;
        }
        if (null !== $this->colorName) {
            $res['color_name'] = $this->colorName;
        }
        if (null !== $this->sizeCode) {
            $res['size_code'] = $this->sizeCode;
        }
        if (null !== $this->sizeName) {
            $res['size_name'] = $this->sizeName;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->finishTime) {
            $res['finish_time'] = $this->finishTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return clothes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['color_code'])){
            $model->colorCode = $map['color_code'];
        }
        if(isset($map['color_name'])){
            $model->colorName = $map['color_name'];
        }
        if(isset($map['size_code'])){
            $model->sizeCode = $map['size_code'];
        }
        if(isset($map['size_name'])){
            $model->sizeName = $map['size_name'];
        }
        if(isset($map['count'])){
            $model->count = $map['count'];
        }
        if(isset($map['finish_time'])){
            $model->finishTime = $map['finish_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        return $model;
    }
    /**
     * @description 颜色code
     * @var string
     */
    public $colorCode;

    /**
     * @description 颜色名
     * @var string
     */
    public $colorName;

    /**
     * @description 尺码code
     * @var string
     */
    public $sizeCode;

    /**
     * @description 尺码名称
     * @var string
     */
    public $sizeName;

    /**
     * @description 数量
     * @var int
     */
    public $count;

    /**
     * @description 衣服完成时间
     * @var string
     */
    public $finishTime;

    /**
     * @description 衣服开始时间
     * @var string
     */
    public $startTime;

}
