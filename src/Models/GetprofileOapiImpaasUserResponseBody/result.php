<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetprofileOapiImpaasUserResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'nick' => 'nick',
        'imOpenid' => 'im_openid',
        'extension' => 'extension',
        'avatarMediaid' => 'avatar_mediaid',
        'status' => 'status',
        'channel' => 'channel',
        'appUserid' => 'app_userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->imOpenid) {
            $res['im_openid'] = $this->imOpenid;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->avatarMediaid) {
            $res['avatar_mediaid'] = $this->avatarMediaid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->appUserid) {
            $res['app_userid'] = $this->appUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['im_openid'])){
            $model->imOpenid = $map['im_openid'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['avatar_mediaid'])){
            $model->avatarMediaid = $map['avatar_mediaid'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['app_userid'])){
            $model->appUserid = $map['app_userid'];
        }
        return $model;
    }
    /**
     * @description 昵称
     * @var string
     */
    public $nick;

    /**
     * @description im的唯一id
     * @var string
     */
    public $imOpenid;

    /**
     * @description 附件信息
     * @var string
     */
    public $extension;

    /**
     * @description 头像的mediaid
     * @var string
     */
    public $avatarMediaid;

    /**
     * @description 用户状态 1 未激活 2 已激活 3 已注销
     * @var int
     */
    public $status;

    /**
     * @description 业务方渠道ID
     * @var string
     */
    public $channel;

    /**
     * @description 业务方的唯一id
     * @var string
     */
    public $appUserid;

}
