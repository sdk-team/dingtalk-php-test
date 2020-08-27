<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetuserinfoOapiSsoResponseBody;

use AlibabaCloud\Tea\Model;

class userInfo extends Model {
    protected $_name = [
        'avatar' => 'avatar',
        'email' => 'email',
        'name' => 'name',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['avatar'])){
            $model->avatar = $map['avatar'];
        }
        if(isset($map['email'])){
            $model->email = $map['email'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description avatar
     * @var string
     */
    public $avatar;

    /**
     * @description email
     * @var string
     */
    public $email;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description 员工在企业内的UserID
     * @var string
     */
    public $userid;

}
