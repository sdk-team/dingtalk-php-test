<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiTdpProjectMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'gmtCreate' => 'gmt_create',
        'modifierUserid' => 'modifier_userid',
        'creatorUserid' => 'creator_userid',
        'bizTag' => 'biz_tag',
        'gmtModified' => 'gmt_modified',
        'belongCorpId' => 'belong_corp_id',
        'targetId' => 'target_id',
        'targetType' => 'target_type',
        'userid' => 'userid',
        'memberId' => 'member_id',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->modifierUserid) {
            $res['modifier_userid'] = $this->modifierUserid;
        }
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->bizTag) {
            $res['biz_tag'] = $this->bizTag;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->belongCorpId) {
            $res['belong_corp_id'] = $this->belongCorpId;
        }
        if (null !== $this->targetId) {
            $res['target_id'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['target_type'] = $this->targetType;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->memberId) {
            $res['member_id'] = $this->memberId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['modifier_userid'])){
            $model->modifierUserid = $map['modifier_userid'];
        }
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['biz_tag'])){
            $model->bizTag = $map['biz_tag'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['belong_corp_id'])){
            $model->belongCorpId = $map['belong_corp_id'];
        }
        if(isset($map['target_id'])){
            $model->targetId = $map['target_id'];
        }
        if(isset($map['target_type'])){
            $model->targetType = $map['target_type'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['member_id'])){
            $model->memberId = $map['member_id'];
        }
        return $model;
    }
    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 更新者id, 传staffId（工号）
     * @var string
     */
    public $modifierUserid;

    /**
     * @description 创建者id, 传staffId（工号）
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 业务标识
     * @var string
     */
    public $bizTag;

    /**
     * @description 修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 归属企业id
     * @var string
     */
    public $belongCorpId;

    /**
     * @description 成员所属空间ID
     * @var string
     */
    public $targetId;

    /**
     * @description 成员所属空间类型
     * @var string
     */
    public $targetType;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 项目成员ID
     * @var string
     */
    public $memberId;

}
