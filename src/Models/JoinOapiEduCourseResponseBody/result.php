<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\JoinOapiEduCourseResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'joinUrl' => 'join_url',
        'joinable' => 'joinable',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->joinUrl) {
            $res['join_url'] = $this->joinUrl;
        }
        if (null !== $this->joinable) {
            $res['joinable'] = $this->joinable;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['join_url'])){
            $model->joinUrl = $map['join_url'];
        }
        if(isset($map['joinable'])){
            $model->joinable = $map['joinable'];
        }
        return $model;
    }
    /**
     * @description 加入链接
     * @var string
     */
    public $joinUrl;

    /**
     * @description 是否可加入
     * @var bool
     */
    public $joinable;

}
