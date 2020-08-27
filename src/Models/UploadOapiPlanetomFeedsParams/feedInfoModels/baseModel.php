<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UploadOapiPlanetomFeedsParams\feedInfoModels;

use AlibabaCloud\Tea\Model;

class baseModel extends Model {
    protected $_name = [
        'coverUrl' => 'cover_url',
        'picIntroduction' => 'pic_introduction',
        'title' => 'title',
        'custTag' => 'cust_tag',
        'introduction' => 'introduction',
    ];
    public function validate() {
        Model::validateRequired('coverUrl', $this->coverUrl, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('introduction', $this->introduction, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->coverUrl) {
            $res['cover_url'] = $this->coverUrl;
        }
        if (null !== $this->picIntroduction) {
            $res['pic_introduction'] = $this->picIntroduction;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->custTag) {
            $res['cust_tag'] = $this->custTag;
        }
        if (null !== $this->introduction) {
            $res['introduction'] = $this->introduction;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return baseModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cover_url'])){
            $model->coverUrl = $map['cover_url'];
        }
        if(isset($map['pic_introduction'])){
            $model->picIntroduction = $map['pic_introduction'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['cust_tag'])){
            $model->custTag = $map['cust_tag'];
        }
        if(isset($map['introduction'])){
            $model->introduction = $map['introduction'];
        }
        return $model;
    }
    /**
     * @description 课程封面URL
     * @var string
     */
    public $coverUrl;

    /**
     * @description 课程图片简介
     * @var string
     */
    public $picIntroduction;

    /**
     * @description 课程标题
     * @var string
     */
    public $title;

    /**
     * @description 课程自定义标签
     * @var string
     */
    public $custTag;

    /**
     * @description 课程简介
     * @var string
     */
    public $introduction;

}
