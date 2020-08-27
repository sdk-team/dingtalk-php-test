<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProjectInviteDataResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'extension' => 'extension',
        'channel' => 'channel',
        'status' => 'status',
        'joinAt' => 'join_at',
        'corpId' => 'corp_id',
        'inviteUserid' => 'invite_userid',
        'gmtModified' => 'gmt_modified',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->joinAt) {
            $res['join_at'] = $this->joinAt;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->inviteUserid) {
            $res['invite_userid'] = $this->inviteUserid;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['join_at'])){
            $model->joinAt = $map['join_at'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['invite_userid'])){
            $model->inviteUserid = $map['invite_userid'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 结果数据，场景ID，sence_id会放在这个地方
     * @var string
     */
    public $extension;

    /**
     * @description 渠道，"MARKET"表示通过营销的数据，其他是通过系统的方式进入
     * @var string
     */
    public $channel;

    /**
     * @description 状态.0表示无效（包括过程数据），1:表示有效
     * @var int
     */
    public $status;

    /**
     * @description 加入日期，格式：yyyyMMdd
     * @var int
     */
    public $joinAt;

    /**
     * @description 组织机构id
     * @var string
     */
    public $corpId;

    /**
     * @description 邀请人用户id
     * @var string
     */
    public $inviteUserid;

    /**
     * @description 修改时间，亦用于游标查询
     * @var int
     */
    public $gmtModified;

    /**
     * @description 被邀请人用户id
     * @var string
     */
    public $userid;

}
