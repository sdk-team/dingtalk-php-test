<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\feedCard\links;

class feedCard extends Model {
    protected $_name = [
        'links' => 'links',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->links) {
            $res['links'] = [];
            if(null !== $this->links && is_array($this->links)){
                $n = 0;
                foreach($this->links as $item){
                    $res['links'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return feedCard
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['links'])){
            if(!empty($map['links'])){
                $model->links = [];
                $n = 0;
                foreach($map['links'] as $item) {
                    $model->links[$n++] = null !== $item ? links::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description links
     * @var array
     */
    public $links;

}
