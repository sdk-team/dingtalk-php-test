<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_msgOapiSnsParams\msg;

use AlibabaCloud\Tea\Model;

class eapp extends Model {
    protected $_name = [
        'title' => 'title',
        'link' => 'link',
        'content' => 'content',
        'img' => 'img',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->img) {
            $res['img'] = $this->img;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return eapp
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['link'])){
            $model->link = $map['link'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['img'])){
            $model->img = $map['img'];
        }
        return $model;
    }
    /**
     * @description 消息标题
     * @var string
     */
    public $title;

    /**
     * @description 消息链接
     * @var string
     */
    public $link;

    /**
     * @description 消息内容
     * @var string
     */
    public $content;

    /**
     * @description 消息图片资源id
     * @var string
     */
    public $img;

}
