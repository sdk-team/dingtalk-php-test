<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiAttendanceCorpInviteactiveParams extends Model {
    protected $_name = [
        'adminMobile' => 'admin_mobile',
        'invitedMobile' => 'invited_mobile',
    ];
    public function validate() {
        Model::validateRequired('adminMobile', $this->adminMobile, true);
        Model::validateRequired('invitedMobile', $this->invitedMobile, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->adminMobile) {
            $res['admin_mobile'] = $this->adminMobile;
        }
        if (null !== $this->invitedMobile) {
            $res['invited_mobile'] = $this->invitedMobile;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiAttendanceCorpInviteactiveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['admin_mobile'])){
            $model->adminMobile = $map['admin_mobile'];
        }
        if(isset($map['invited_mobile'])){
            $model->invitedMobile = $map['invited_mobile'];
        }
        return $model;
    }
    /**
     * @description 管理员的手机号
     * @var string
     */
    public $adminMobile;

    /**
     * @description 被邀请员工的手机号
     * @var string
     */
    public $invitedMobile;

}
