<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiAtsChannelAccountParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'userid' => 'userid',
        'channelUserIdentify' => 'channel_user_identify',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('channelUserIdentify', $this->channelUserIdentify, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->channelUserIdentify) {
            $res['channel_user_identify'] = $this->channelUserIdentify;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiAtsChannelAccountParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['channel_user_identify'])){
            $model->channelUserIdentify = $map['channel_user_identify'];
        }
        return $model;
    }
    /**
     * @description 招聘业务码
     * @var string
     */
    public $bizCode;

    /**
     * @description 钉钉用户userId
     * @var string
     */
    public $userid;

    /**
     * @description 渠道用户唯一标识
     * @var string
     */
    public $channelUserIdentify;

}
