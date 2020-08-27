<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiMaterialNewsResponseBody\articles;

class GetOapiMaterialNewsResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'mediaId' => 'media_id',
        'updateTime' => 'update_time',
        'articles' => 'articles',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        if (null !== $this->updateTime) {
            $res['update_time'] = $this->updateTime;
        }
        if (null !== $this->articles) {
            $res['articles'] = [];
            if(null !== $this->articles && is_array($this->articles)){
                $n = 0;
                foreach($this->articles as $item){
                    $res['articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiMaterialNewsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        if(isset($map['update_time'])){
            $model->updateTime = $map['update_time'];
        }
        if(isset($map['articles'])){
            if(!empty($map['articles'])){
                $model->articles = [];
                $n = 0;
                foreach($map['articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 卡片素材id
     * @var string
     */
    public $mediaId;

    /**
     * @description 消息卡片更新时间
     * @var int
     */
    public $updateTime;

    /**
     * @description 文章列表
     * @var array
     */
    public $articles;

}
