<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbyuseridOapiWorkrecordResponseBody\records;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbyuseridOapiWorkrecordResponseBody\records\list_\forms;

class list_ extends Model {
    protected $_name = [
        'recordId' => 'record_id',
        'createTime' => 'create_time',
        'title' => 'title',
        'url' => 'url',
        'forms' => 'forms',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->recordId) {
            $res['record_id'] = $this->recordId;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->forms) {
            $res['forms'] = [];
            if(null !== $this->forms && is_array($this->forms)){
                $n = 0;
                foreach($this->forms as $item){
                    $res['forms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['record_id'])){
            $model->recordId = $map['record_id'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['forms'])){
            if(!empty($map['forms'])){
                $model->forms = [];
                $n = 0;
                foreach($map['forms'] as $item) {
                    $model->forms[$n++] = null !== $item ? forms::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description recordId
     * @var string
     */
    public $recordId;

    /**
     * @description createAt
     * @var int
     */
    public $createTime;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description url
     * @var string
     */
    public $url;

    /**
     * @description forms
     * @var array
     */
    public $forms;

}
