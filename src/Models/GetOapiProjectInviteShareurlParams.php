<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProjectInviteShareurlParams\inviteInfo;

class GetOapiProjectInviteShareurlParams extends Model {
    protected $_name = [
        'inviteInfo' => 'invite_info',
    ];
    public function validate() {
        Model::validateRequired('inviteInfo', $this->inviteInfo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->inviteInfo) {
            $res['invite_info'] = null !== $this->inviteInfo ? $this->inviteInfo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiProjectInviteShareurlParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['invite_info'])){
            $model->inviteInfo = inviteInfo::fromMap($map['invite_info']);
        }
        return $model;
    }
    /**
     * @description 邀请信息
     * @var inviteInfo
     */
    public $inviteInfo;

}
