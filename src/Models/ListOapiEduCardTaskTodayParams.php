<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduCardTaskTodayParams extends Model {
    protected $_name = [
        'cardType' => 'card_type',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->cardType) {
            $res['card_type'] = $this->cardType;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduCardTaskTodayParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['card_type'])){
            $model->cardType = $map['card_type'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 打卡类型,跳绳:jump
     * @var string
     */
    public $cardType;

    /**
     * @description 用户userId
     * @var string
     */
    public $userid;

}
