<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerytagOapiDingpayBillResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'tags' => 'tags',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tags'])){
            if(!empty($map['tags'])){
                $model->tags = $map['tags'];
            }
        }
        return $model;
    }
    /**
     * @description 标签列表
     * @var array
     */
    public $tags;

}
