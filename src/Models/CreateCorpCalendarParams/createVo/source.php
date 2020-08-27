<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpCalendarParams\createVo;

use AlibabaCloud\Tea\Model;

class source extends Model {
    protected $_name = [
        'title' => 'title',
        'url' => 'url',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('url', $this->url, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return source
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        return $model;
    }
    /**
     * @description 日程来源
     * @var string
     */
    public $title;

    /**
     * @description 点击日程跳转目标地址
     * @var string
     */
    public $url;

}
