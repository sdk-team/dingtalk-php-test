<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams;

use AlibabaCloud\Tea\Model;

class at extends Model {
    protected $_name = [
        'isAtAll' => 'isAtAll',
        'atMobiles' => 'atMobiles',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->isAtAll) {
            $res['isAtAll'] = $this->isAtAll;
        }
        if (null !== $this->atMobiles) {
            $res['atMobiles'] = $this->atMobiles;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return at
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['isAtAll'])){
            $model->isAtAll = $map['isAtAll'];
        }
        if(isset($map['atMobiles'])){
            if(!empty($map['atMobiles'])){
                $model->atMobiles = $map['atMobiles'];
            }
        }
        return $model;
    }
    /**
     * @description @所有人时:true,否则为:false
     * @var bool
     */
    public $isAtAll;

    /**
     * @description 被@人的手机号
     * @var array
     */
    public $atMobiles;

}
