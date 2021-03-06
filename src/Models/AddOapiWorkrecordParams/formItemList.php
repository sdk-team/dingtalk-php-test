<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkrecordParams;

use AlibabaCloud\Tea\Model;

class formItemList extends Model {
    protected $_name = [
        'title' => 'title',
        'content' => 'content',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('content', $this->content, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return formItemList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        return $model;
    }
    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 内容
     * @var string
     */
    public $content;

}
