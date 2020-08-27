<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddprofileOapiImpaasUserParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'id' => 'id',
        'nick' => 'nick',
        'channel' => 'channel',
        'extension' => 'extension',
        'avatarMediaid' => 'avatar_mediaid',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('nick', $this->nick, true);
        Model::validateRequired('channel', $this->channel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->avatarMediaid) {
            $res['avatar_mediaid'] = $this->avatarMediaid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['avatar_mediaid'])){
            $model->avatarMediaid = $map['avatar_mediaid'];
        }
        return $model;
    }
    /**
     * @description 账号id
     * @var string
     */
    public $id;

    /**
     * @description 账号nick
     * @var string
     */
    public $nick;

    /**
     * @description 渠道
     * @var string
     */
    public $channel;

    /**
     * @description 附加信息
     * @var string
     */
    public $extension;

    /**
     * @description 头像mediaid
     * @var string
     */
    public $avatarMediaid;

}
