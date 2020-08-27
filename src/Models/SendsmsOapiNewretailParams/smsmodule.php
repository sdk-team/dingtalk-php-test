<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendsmsOapiNewretailParams;

use AlibabaCloud\Tea\Model;

class smsmodule extends Model {
    protected $_name = [
        'userid' => 'userid',
        'username' => 'username',
        'brandname' => 'brandname',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->brandname) {
            $res['brandname'] = $this->brandname;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return smsmodule
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['username'])){
            $model->username = $map['username'];
        }
        if(isset($map['brandname'])){
            $model->brandname = $map['brandname'];
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 员工nick
     * @var string
     */
    public $username;

    /**
     * @description 品牌名
     * @var string
     */
    public $brandname;

}
