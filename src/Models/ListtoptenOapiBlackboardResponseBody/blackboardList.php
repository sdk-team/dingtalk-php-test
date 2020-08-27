<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListtoptenOapiBlackboardResponseBody;

use AlibabaCloud\Tea\Model;

class blackboardList extends Model {
    protected $_name = [
        'gmtCreate' => 'gmt_create',
        'title' => 'title',
        'url' => 'url',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
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
     * @return blackboardList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        return $model;
    }
    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 跳转URL
     * @var string
     */
    public $url;

}
