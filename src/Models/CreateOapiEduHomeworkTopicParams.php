<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiEduHomeworkTopicParams\topicItems;

class CreateOapiEduHomeworkTopicParams extends Model {
    protected $_name = [
        'topicItems' => 'topic_items',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->topicItems) {
            $res['topic_items'] = [];
            if(null !== $this->topicItems && is_array($this->topicItems)){
                $n = 0;
                foreach($this->topicItems as $item){
                    $res['topic_items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiEduHomeworkTopicParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['topic_items'])){
            if(!empty($map['topic_items'])){
                $model->topicItems = [];
                $n = 0;
                foreach($map['topic_items'] as $item) {
                    $model->topicItems[$n++] = null !== $item ? topicItems::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 题目列表
     * @var array
     */
    public $topicItems;

}
