<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiMaterialNewsParams\articles;

class AddOapiMaterialNewsParams extends Model {
    protected $_name = [
        'articles' => 'articles',
        'unionid' => 'unionid',
    ];
    public function validate() {
        Model::validateRequired('articles', $this->articles, true);
        Model::validateRequired('unionid', $this->unionid, true);
    }
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
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiMaterialNewsParams
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
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        return $model;
    }
    /**
     * @description 文章列表
     * @var array
     */
    public $articles;

    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

}
