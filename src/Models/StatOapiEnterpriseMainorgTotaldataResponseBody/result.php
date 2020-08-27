<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseMainorgTotaldataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'activeMbrCntStd' => 'active_mbr_cnt_std',
        'allGroupCnt' => 'all_group_cnt',
        'carbonAmount1d' => 'carbon_amount_1d',
        'carbonAmount1w' => 'carbon_amount_1w',
        'corpId' => 'corp_id',
        'deptGroupCnt' => 'dept_group_cnt',
        'dingSaveHour1d' => 'ding_save_hour_1d',
        'dingSaveHour1w' => 'ding_save_hour_1w',
        'innerGroupCnt' => 'innerGroupCnt',
        'liveLaunchSuccCnt1d' => 'liveLaunchSuccCnt1d',
        'liveLaunchSuccCnt1w' => 'liveLaunchSuccCnt1w',
        'mbrCntStd' => 'mbr_cnt_std',
        'onlineConferenceCnt1d' => 'online_conference_cnt_1d',
        'onlineConferenceCnt7d' => 'online_conference_cnt_7d',
        'onlineOrgNt' => 'online_org_nt',
        'orgOnlineRatio' => 'org_online_ratio',
        'realOrgCnt' => 'real_org_cnt',
        'receiveDingUserCnt1d' => 'receive_ding_user_cnt_1d',
        'receiveDingUserCnt1w' => 'receive_ding_user_cnt_1w',
        'relOrgNt' => 'rel_org_nt',
        'sendMessageUserCnt1d' => 'send_message_user_cnt_1d',
        'endMessageUserCnt1w' => 'end_message_user_cnt_1w',
        'statDate' => 'stat_date',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->activeMbrCntStd) {
            $res['active_mbr_cnt_std'] = $this->activeMbrCntStd;
        }
        if (null !== $this->allGroupCnt) {
            $res['all_group_cnt'] = $this->allGroupCnt;
        }
        if (null !== $this->carbonAmount1d) {
            $res['carbon_amount_1d'] = $this->carbonAmount1d;
        }
        if (null !== $this->carbonAmount1w) {
            $res['carbon_amount_1w'] = $this->carbonAmount1w;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->deptGroupCnt) {
            $res['dept_group_cnt'] = $this->deptGroupCnt;
        }
        if (null !== $this->dingSaveHour1d) {
            $res['ding_save_hour_1d'] = $this->dingSaveHour1d;
        }
        if (null !== $this->dingSaveHour1w) {
            $res['ding_save_hour_1w'] = $this->dingSaveHour1w;
        }
        if (null !== $this->innerGroupCnt) {
            $res['innerGroupCnt'] = $this->innerGroupCnt;
        }
        if (null !== $this->liveLaunchSuccCnt1d) {
            $res['liveLaunchSuccCnt1d'] = $this->liveLaunchSuccCnt1d;
        }
        if (null !== $this->liveLaunchSuccCnt1w) {
            $res['liveLaunchSuccCnt1w'] = $this->liveLaunchSuccCnt1w;
        }
        if (null !== $this->mbrCntStd) {
            $res['mbr_cnt_std'] = $this->mbrCntStd;
        }
        if (null !== $this->onlineConferenceCnt1d) {
            $res['online_conference_cnt_1d'] = $this->onlineConferenceCnt1d;
        }
        if (null !== $this->onlineConferenceCnt7d) {
            $res['online_conference_cnt_7d'] = $this->onlineConferenceCnt7d;
        }
        if (null !== $this->onlineOrgNt) {
            $res['online_org_nt'] = $this->onlineOrgNt;
        }
        if (null !== $this->orgOnlineRatio) {
            $res['org_online_ratio'] = $this->orgOnlineRatio;
        }
        if (null !== $this->realOrgCnt) {
            $res['real_org_cnt'] = $this->realOrgCnt;
        }
        if (null !== $this->receiveDingUserCnt1d) {
            $res['receive_ding_user_cnt_1d'] = $this->receiveDingUserCnt1d;
        }
        if (null !== $this->receiveDingUserCnt1w) {
            $res['receive_ding_user_cnt_1w'] = $this->receiveDingUserCnt1w;
        }
        if (null !== $this->relOrgNt) {
            $res['rel_org_nt'] = $this->relOrgNt;
        }
        if (null !== $this->sendMessageUserCnt1d) {
            $res['send_message_user_cnt_1d'] = $this->sendMessageUserCnt1d;
        }
        if (null !== $this->endMessageUserCnt1w) {
            $res['end_message_user_cnt_1w'] = $this->endMessageUserCnt1w;
        }
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['active_mbr_cnt_std'])){
            $model->activeMbrCntStd = $map['active_mbr_cnt_std'];
        }
        if(isset($map['all_group_cnt'])){
            $model->allGroupCnt = $map['all_group_cnt'];
        }
        if(isset($map['carbon_amount_1d'])){
            $model->carbonAmount1d = $map['carbon_amount_1d'];
        }
        if(isset($map['carbon_amount_1w'])){
            $model->carbonAmount1w = $map['carbon_amount_1w'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['dept_group_cnt'])){
            $model->deptGroupCnt = $map['dept_group_cnt'];
        }
        if(isset($map['ding_save_hour_1d'])){
            $model->dingSaveHour1d = $map['ding_save_hour_1d'];
        }
        if(isset($map['ding_save_hour_1w'])){
            $model->dingSaveHour1w = $map['ding_save_hour_1w'];
        }
        if(isset($map['innerGroupCnt'])){
            $model->innerGroupCnt = $map['innerGroupCnt'];
        }
        if(isset($map['liveLaunchSuccCnt1d'])){
            $model->liveLaunchSuccCnt1d = $map['liveLaunchSuccCnt1d'];
        }
        if(isset($map['liveLaunchSuccCnt1w'])){
            $model->liveLaunchSuccCnt1w = $map['liveLaunchSuccCnt1w'];
        }
        if(isset($map['mbr_cnt_std'])){
            $model->mbrCntStd = $map['mbr_cnt_std'];
        }
        if(isset($map['online_conference_cnt_1d'])){
            $model->onlineConferenceCnt1d = $map['online_conference_cnt_1d'];
        }
        if(isset($map['online_conference_cnt_7d'])){
            $model->onlineConferenceCnt7d = $map['online_conference_cnt_7d'];
        }
        if(isset($map['online_org_nt'])){
            $model->onlineOrgNt = $map['online_org_nt'];
        }
        if(isset($map['org_online_ratio'])){
            $model->orgOnlineRatio = $map['org_online_ratio'];
        }
        if(isset($map['real_org_cnt'])){
            $model->realOrgCnt = $map['real_org_cnt'];
        }
        if(isset($map['receive_ding_user_cnt_1d'])){
            $model->receiveDingUserCnt1d = $map['receive_ding_user_cnt_1d'];
        }
        if(isset($map['receive_ding_user_cnt_1w'])){
            $model->receiveDingUserCnt1w = $map['receive_ding_user_cnt_1w'];
        }
        if(isset($map['rel_org_nt'])){
            $model->relOrgNt = $map['rel_org_nt'];
        }
        if(isset($map['send_message_user_cnt_1d'])){
            $model->sendMessageUserCnt1d = $map['send_message_user_cnt_1d'];
        }
        if(isset($map['end_message_user_cnt_1w'])){
            $model->endMessageUserCnt1w = $map['end_message_user_cnt_1w'];
        }
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        return $model;
    }
    /**
     * @description 在线组织激活用户数
     * @var string
     */
    public $activeMbrCntStd;

    /**
     * @description 全员群数量
     * @var string
     */
    public $allGroupCnt;

    /**
     * @description 最近1天降低碳排量G
     * @var string
     */
    public $carbonAmount1d;

    /**
     * @description 最近7天降低碳排量G
     * @var string
     */
    public $carbonAmount1w;

    /**
     * @description 企业ID
     * @var string
     */
    public $corpId;

    /**
     * @description 部门群数量
     * @var string
     */
    public $deptGroupCnt;

    /**
     * @description 最近1天钉办节约小时
     * @var string
     */
    public $dingSaveHour1d;

    /**
     * @description 最近7天钉办节约小时
     * @var string
     */
    public $dingSaveHour1w;

    /**
     * @description 内部群数量
     * @var string
     */
    public $innerGroupCnt;

    /**
     * @description 最近1天成功发起直播次数
     * @var string
     */
    public $liveLaunchSuccCnt1d;

    /**
     * @description 最近7天成功发起直播次数
     * @var string
     */
    public $liveLaunchSuccCnt1w;

    /**
     * @description 在线组织通讯录人数
     * @var string
     */
    public $mbrCntStd;

    /**
     * @description 最近1天在线会议次数
     * @var string
     */
    public $onlineConferenceCnt1d;

    /**
     * @description 最近7天在线会议次数
     * @var string
     */
    public $onlineConferenceCnt7d;

    /**
     * @description 在线组织数
     * @var string
     */
    public $onlineOrgNt;

    /**
     * @description 组织覆盖率
     * @var string
     */
    public $orgOnlineRatio;

    /**
     * @description 实际组织数
     * @var string
     */
    public $realOrgCnt;

    /**
     * @description 最近1天接收DING的用户数
     * @var string
     */
    public $receiveDingUserCnt1d;

    /**
     * @description 最近7天接收DING的用户数
     * @var string
     */
    public $receiveDingUserCnt1w;

    /**
     * @description 关联组织数
     * @var string
     */
    public $relOrgNt;

    /**
     * @description 最近1天发送消息人数
     * @var string
     */
    public $sendMessageUserCnt1d;

    /**
     * @description 最近7天发送消息人数
     * @var string
     */
    public $endMessageUserCnt1w;

    /**
     * @description 统计日期
     * @var string
     */
    public $statDate;

}
