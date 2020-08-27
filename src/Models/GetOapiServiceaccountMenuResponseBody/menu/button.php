<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiServiceaccountMenuResponseBody\menu;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiServiceaccountMenuResponseBody\menu\button\subButton;

class button extends Model {
    protected $_name = [
        'name' => 'name',
        'type' => 'type',
        'key' => 'key',
        'url' => 'url',
        'subButton' => 'sub_button',
        'mediaId' => 'media_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->subButton) {
            $res['sub_button'] = [];
            if(null !== $this->subButton && is_array($this->subButton)){
                $n = 0;
                foreach($this->subButton as $item){
                    $res['sub_button'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return button
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['sub_button'])){
            if(!empty($map['sub_button'])){
                $model->subButton = [];
                $n = 0;
                foreach($map['sub_button'] as $item) {
                    $model->subButton[$n++] = null !== $item ? subButton::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        return $model;
    }
    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 类型
     * @var string
     */
    public $type;

    /**
     * @description 菜单绑定的key值
     * @var string
     */
    public $key;

    /**
     * @description 菜单绑定的URL
     * @var string
     */
    public $url;

    /**
     * @description 子菜单按钮列表
     * @var array
     */
    public $subButton;

    /**
     * @description 素材id
     * @var string
     */
    public $mediaId;

}
