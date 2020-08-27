<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SetscreenOapiOrgParams extends Model {
    protected $_name = [
        'mediaId' => 'mediaId',
        'endTime' => 'endTime',
        'jumpUrl' => 'jumpUrl',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->mediaId) {
            $res['mediaId'] = $this->mediaId;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->jumpUrl) {
            $res['jumpUrl'] = $this->jumpUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SetscreenOapiOrgParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['mediaId'])){
            $model->mediaId = $map['mediaId'];
        }
        if(isset($map['endTime'])){
            $model->endTime = $map['endTime'];
        }
        if(isset($map['jumpUrl'])){
            $model->jumpUrl = $map['jumpUrl'];
        }
        return $model;
    }
    /**
     * @description 开机图片资源id，可以通过/media/upload接口上传图片获取
     * @var string
     */
    public $mediaId;

    /**
     * @description yyyy-MM-dd显示截止时间
     * @var string
     */
    public $endTime;

    /**
     * @description 点击开机图片跳转地址
     * @var string
     */
    public $jumpUrl;

}
