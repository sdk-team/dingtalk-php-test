<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModprofileOapiImpaasUserParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModprofileOapiImpaasUserParams\request\accountInfo;

class request extends Model {
    protected $_name = [
        'extension' => 'extension',
        'nick' => 'nick',
        'accountInfo' => 'account_info',
        'avatarMediaid' => 'avatar_mediaid',
    ];
    public function validate() {
        Model::validateRequired('accountInfo', $this->accountInfo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->accountInfo) {
            $res['account_info'] = null !== $this->accountInfo ? $this->accountInfo->toMap() : null;
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
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['account_info'])){
            $model->accountInfo = accountInfo::fromMap($map['account_info']);
        }
        if(isset($map['avatar_mediaid'])){
            $model->avatarMediaid = $map['avatar_mediaid'];
        }
        return $model;
    }
    /**
     * @description 附带信息
     * @var string
     */
    public $extension;

    /**
     * @description nick
     * @var string
     */
    public $nick;

    /**
     * @description 账号信息
     * @var accountInfo
     */
    public $accountInfo;

    /**
     * @description 头像
     * @var string
     */
    public $avatarMediaid;

}
