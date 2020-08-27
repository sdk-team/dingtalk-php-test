<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiMaterialNewsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiMaterialNewsResponseBody\items\articles;

class items extends Model {
    protected $_name = [
        'articles' => 'articles',
        'updateTime' => 'update_time',
        'mediaId' => 'media_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->articles) {
            $res['articles'] = [];
            if(null !== $this->articles && is_array($this->articles)){
                $n = 0;
                foreach($this->articles as $item){
                    $res['articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['update_time'] = $this->updateTime;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['articles'])){
            if(!empty($map['articles'])){
                $model->articles = [];
                $n = 0;
                foreach($map['articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['update_time'])){
            $model->updateTime = $map['update_time'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        return $model;
    }
    /**
     * @description 文章列表
     * @var array
     */
    public $articles;

    /**
     * @description 消息卡片更新时间
     * @var int
     */
    public $updateTime;

    /**
     * @description 消息卡片的素材id
     * @var string
     */
    public $mediaId;

}
