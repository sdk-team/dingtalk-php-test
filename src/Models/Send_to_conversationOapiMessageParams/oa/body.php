<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\oa;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\oa\body\form;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\oa\body\rich;

class body extends Model {
    protected $_name = [
        'title' => 'title',
        'form' => 'form',
        'rich' => 'rich',
        'content' => 'content',
        'image' => 'image',
        'fileCount' => 'file_count',
        'author' => 'author',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->form) {
            $res['form'] = [];
            if(null !== $this->form && is_array($this->form)){
                $n = 0;
                foreach($this->form as $item){
                    $res['form'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rich) {
            $res['rich'] = null !== $this->rich ? $this->rich->toMap() : null;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }
        if (null !== $this->fileCount) {
            $res['file_count'] = $this->fileCount;
        }
        if (null !== $this->author) {
            $res['author'] = $this->author;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return body
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['form'])){
            if(!empty($map['form'])){
                $model->form = [];
                $n = 0;
                foreach($map['form'] as $item) {
                    $model->form[$n++] = null !== $item ? form::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['rich'])){
            $model->rich = rich::fromMap($map['rich']);
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['image'])){
            $model->image = $map['image'];
        }
        if(isset($map['file_count'])){
            $model->fileCount = $map['file_count'];
        }
        if(isset($map['author'])){
            $model->author = $map['author'];
        }
        return $model;
    }
    /**
     * @description 消息体的标题，建议50个字符以内
     * @var string
     */
    public $title;

    /**
     * @description 消息体的表单，最多显示6个，超过会被隐藏
     * @var array
     */
    public $form;

    /**
     * @description 单行富文本信息
     * @var rich
     */
    public $rich;

    /**
     * @description 消息体的内容，最多显示3行
     * @var string
     */
    public $content;

    /**
     * @description 消息体中的图片，支持图片资源@mediaId
     * @var string
     */
    public $image;

    /**
     * @description 自定义的附件数目。此数字仅供显示，钉钉不作验证
     * @var string
     */
    public $fileCount;

    /**
     * @description 自定义的作者名字
     * @var string
     */
    public $author;

}
