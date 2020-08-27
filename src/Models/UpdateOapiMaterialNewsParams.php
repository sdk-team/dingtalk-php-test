<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiMaterialNewsParams\articles;

class UpdateOapiMaterialNewsParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
        'mediaId' => 'media_id',
        'articles' => 'articles',
    ];
    public function validate() {
        Model::validateRequired('unionid', $this->unionid, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
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
     * @return UpdateOapiMaterialNewsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
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
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

    /**
     * @description 消息卡片素材id
     * @var string
     */
    public $mediaId;

    /**
     * @description 文章列表
     * @var array
     */
    public $articles;

}
