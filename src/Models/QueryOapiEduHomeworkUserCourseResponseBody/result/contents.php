<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiEduHomeworkUserCourseResponseBody\result;

use AlibabaCloud\Tea\Model;

class contents extends Model {
    protected $_name = [
        'photo' => 'photo',
        'title' => 'title',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->photo) {
            $res['photo'] = $this->photo;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return contents
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['photo'])){
            $model->photo = $map['photo'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 图片
     * @var string
     */
    public $photo;

    /**
     * @description 标题
     * @var string
     */
    public $title;

}
