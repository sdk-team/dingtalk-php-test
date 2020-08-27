<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseSuborgTotaldataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'statDate' => 'stat_date',
        'corpId' => 'corp_id',
        'actRatio1d' => 'act_ratio_1d',
        'actRatio1w' => 'act_ratio_1w',
        'actUsrCnt1d' => 'act_usr_cnt_1d',
        'actUsrCnt1w' => 'act_usr_cnt_1w',
        'activeMbrCntStd' => 'active_mbr_cnt_std',
        'activeRatio' => 'active_ratio',
        'dingIndex1d' => 'ding_index_1d',
        'dingIndex1w' => 'ding_index_1w',
        'mbrCntStd' => 'mbr_cnt_std',
        'microAppUseRatio1d' => 'micro_app_use_ratio_1d',
        'microAppUseRatio1w' => 'micro_app_use_ratio_1w',
        'microAppUserCnt1d' => 'micro_app_user_cnt_1d',
        'microAppUserCnt1w' => 'micro_app_user_cnt_1w',
        'pmFormCnt001' => 'pm_form_cnt_001',
        'pmFormCnt002' => 'pm_form_cnt_002',
        'pmFormSelfDefRatio' => 'pm_form_self_def_ratio',
        'processUserCnt1d' => 'process_user_cnt_1d',
        'processUserCnt1w' => 'process_user_cnt_1w',
        'processUserRatio1d' => 'process_user_ratio_1d',
        'processUserRatio1w' => 'process_user_ratio_1w',
        'sendMessageUserCnt1d' => 'send_message_user_cnt_1d',
        'sendMessageUserCnt1w' => 'send_message_user_cnt_1w',
        'sendMessageUserRatio1d' => 'send_message_user_ratio_1d',
        'sendMessageUserRatio1w' => 'send_message_user_ratio_1w',
        'subOrgAreaLat' => 'sub_org_area_lat',
        'subOrgAreaLng' => 'sub_org_area_lng',
        'subOrgName' => 'sub_org_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->actRatio1d) {
            $res['act_ratio_1d'] = $this->actRatio1d;
        }
        if (null !== $this->actRatio1w) {
            $res['act_ratio_1w'] = $this->actRatio1w;
        }
        if (null !== $this->actUsrCnt1d) {
            $res['act_usr_cnt_1d'] = $this->actUsrCnt1d;
        }
        if (null !== $this->actUsrCnt1w) {
            $res['act_usr_cnt_1w'] = $this->actUsrCnt1w;
        }
        if (null !== $this->activeMbrCntStd) {
            $res['active_mbr_cnt_std'] = $this->activeMbrCntStd;
        }
        if (null !== $this->activeRatio) {
            $res['active_ratio'] = $this->activeRatio;
        }
        if (null !== $this->dingIndex1d) {
            $res['ding_index_1d'] = $this->dingIndex1d;
        }
        if (null !== $this->dingIndex1w) {
            $res['ding_index_1w'] = $this->dingIndex1w;
        }
        if (null !== $this->mbrCntStd) {
            $res['mbr_cnt_std'] = $this->mbrCntStd;
        }
        if (null !== $this->microAppUseRatio1d) {
            $res['micro_app_use_ratio_1d'] = $this->microAppUseRatio1d;
        }
        if (null !== $this->microAppUseRatio1w) {
            $res['micro_app_use_ratio_1w'] = $this->microAppUseRatio1w;
        }
        if (null !== $this->microAppUserCnt1d) {
            $res['micro_app_user_cnt_1d'] = $this->microAppUserCnt1d;
        }
        if (null !== $this->microAppUserCnt1w) {
            $res['micro_app_user_cnt_1w'] = $this->microAppUserCnt1w;
        }
        if (null !== $this->pmFormCnt001) {
            $res['pm_form_cnt_001'] = $this->pmFormCnt001;
        }
        if (null !== $this->pmFormCnt002) {
            $res['pm_form_cnt_002'] = $this->pmFormCnt002;
        }
        if (null !== $this->pmFormSelfDefRatio) {
            $res['pm_form_self_def_ratio'] = $this->pmFormSelfDefRatio;
        }
        if (null !== $this->processUserCnt1d) {
            $res['process_user_cnt_1d'] = $this->processUserCnt1d;
        }
        if (null !== $this->processUserCnt1w) {
            $res['process_user_cnt_1w'] = $this->processUserCnt1w;
        }
        if (null !== $this->processUserRatio1d) {
            $res['process_user_ratio_1d'] = $this->processUserRatio1d;
        }
        if (null !== $this->processUserRatio1w) {
            $res['process_user_ratio_1w'] = $this->processUserRatio1w;
        }
        if (null !== $this->sendMessageUserCnt1d) {
            $res['send_message_user_cnt_1d'] = $this->sendMessageUserCnt1d;
        }
        if (null !== $this->sendMessageUserCnt1w) {
            $res['send_message_user_cnt_1w'] = $this->sendMessageUserCnt1w;
        }
        if (null !== $this->sendMessageUserRatio1d) {
            $res['send_message_user_ratio_1d'] = $this->sendMessageUserRatio1d;
        }
        if (null !== $this->sendMessageUserRatio1w) {
            $res['send_message_user_ratio_1w'] = $this->sendMessageUserRatio1w;
        }
        if (null !== $this->subOrgAreaLat) {
            $res['sub_org_area_lat'] = $this->subOrgAreaLat;
        }
        if (null !== $this->subOrgAreaLng) {
            $res['sub_org_area_lng'] = $this->subOrgAreaLng;
        }
        if (null !== $this->subOrgName) {
            $res['sub_org_name'] = $this->subOrgName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['act_ratio_1d'])){
            $model->actRatio1d = $map['act_ratio_1d'];
        }
        if(isset($map['act_ratio_1w'])){
            $model->actRatio1w = $map['act_ratio_1w'];
        }
        if(isset($map['act_usr_cnt_1d'])){
            $model->actUsrCnt1d = $map['act_usr_cnt_1d'];
        }
        if(isset($map['act_usr_cnt_1w'])){
            $model->actUsrCnt1w = $map['act_usr_cnt_1w'];
        }
        if(isset($map['active_mbr_cnt_std'])){
            $model->activeMbrCntStd = $map['active_mbr_cnt_std'];
        }
        if(isset($map['active_ratio'])){
            $model->activeRatio = $map['active_ratio'];
        }
        if(isset($map['ding_index_1d'])){
            $model->dingIndex1d = $map['ding_index_1d'];
        }
        if(isset($map['ding_index_1w'])){
            $model->dingIndex1w = $map['ding_index_1w'];
        }
        if(isset($map['mbr_cnt_std'])){
            $model->mbrCntStd = $map['mbr_cnt_std'];
        }
        if(isset($map['micro_app_use_ratio_1d'])){
            $model->microAppUseRatio1d = $map['micro_app_use_ratio_1d'];
        }
        if(isset($map['micro_app_use_ratio_1w'])){
            $model->microAppUseRatio1w = $map['micro_app_use_ratio_1w'];
        }
        if(isset($map['micro_app_user_cnt_1d'])){
            $model->microAppUserCnt1d = $map['micro_app_user_cnt_1d'];
        }
        if(isset($map['micro_app_user_cnt_1w'])){
            $model->microAppUserCnt1w = $map['micro_app_user_cnt_1w'];
        }
        if(isset($map['pm_form_cnt_001'])){
            $model->pmFormCnt001 = $map['pm_form_cnt_001'];
        }
        if(isset($map['pm_form_cnt_002'])){
            $model->pmFormCnt002 = $map['pm_form_cnt_002'];
        }
        if(isset($map['pm_form_self_def_ratio'])){
            $model->pmFormSelfDefRatio = $map['pm_form_self_def_ratio'];
        }
        if(isset($map['process_user_cnt_1d'])){
            $model->processUserCnt1d = $map['process_user_cnt_1d'];
        }
        if(isset($map['process_user_cnt_1w'])){
            $model->processUserCnt1w = $map['process_user_cnt_1w'];
        }
        if(isset($map['process_user_ratio_1d'])){
            $model->processUserRatio1d = $map['process_user_ratio_1d'];
        }
        if(isset($map['process_user_ratio_1w'])){
            $model->processUserRatio1w = $map['process_user_ratio_1w'];
        }
        if(isset($map['send_message_user_cnt_1d'])){
            $model->sendMessageUserCnt1d = $map['send_message_user_cnt_1d'];
        }
        if(isset($map['send_message_user_cnt_1w'])){
            $model->sendMessageUserCnt1w = $map['send_message_user_cnt_1w'];
        }
        if(isset($map['send_message_user_ratio_1d'])){
            $model->sendMessageUserRatio1d = $map['send_message_user_ratio_1d'];
        }
        if(isset($map['send_message_user_ratio_1w'])){
            $model->sendMessageUserRatio1w = $map['send_message_user_ratio_1w'];
        }
        if(isset($map['sub_org_area_lat'])){
            $model->subOrgAreaLat = $map['sub_org_area_lat'];
        }
        if(isset($map['sub_org_area_lng'])){
            $model->subOrgAreaLng = $map['sub_org_area_lng'];
        }
        if(isset($map['sub_org_name'])){
            $model->subOrgName = $map['sub_org_name'];
        }
        return $model;
    }
    /**
     * @description 查询时间
     * @var string
     */
    public $statDate;

    /**
     * @description 企业ID
     * @var string
     */
    public $corpId;

    /**
     * @description 最近1天活跃率
     * @var string
     */
    public $actRatio1d;

    /**
     * @description 最近7天活跃率
     * @var string
     */
    public $actRatio1w;

    /**
     * @description 活跃用户数最近1天
     * @var string
     */
    public $actUsrCnt1d;

    /**
     * @description 最近7天活跃用户数
     * @var string
     */
    public $actUsrCnt1w;

    /**
     * @description 历史截至当日激活会员数
     * @var string
     */
    public $activeMbrCntStd;

    /**
     * @description 激活率
     * @var string
     */
    public $activeRatio;

    /**
     * @description 最近1天钉钉指数
     * @var string
     */
    public $dingIndex1d;

    /**
     * @description 最近7天钉钉指数
     * @var string
     */
    public $dingIndex1w;

    /**
     * @description 历史截至当日企业会员数
     * @var string
     */
    public $mbrCntStd;

    /**
     * @description 最近1天使用钉钉微应用用户比率
     * @var string
     */
    public $microAppUseRatio1d;

    /**
     * @description 最近7天使用钉钉微应用用户比率
     * @var string
     */
    public $microAppUseRatio1w;

    /**
     * @description 最近1天使用钉钉微应用用户数
     * @var string
     */
    public $microAppUserCnt1d;

    /**
     * @description 最近7天使用钉钉微应用用户数
     * @var string
     */
    public $microAppUserCnt1w;

    /**
     * @description 审批模板数
     * @var string
     */
    public $pmFormCnt001;

    /**
     * @description 自定义模板数
     * @var string
     */
    public $pmFormCnt002;

    /**
     * @description 自定义模板比率
     * @var string
     */
    public $pmFormSelfDefRatio;

    /**
     * @description 最近1天使用审批用户数
     * @var string
     */
    public $processUserCnt1d;

    /**
     * @description 最近7天使用审批用户数
     * @var string
     */
    public $processUserCnt1w;

    /**
     * @description 最近1天使用审批的用户比率
     * @var string
     */
    public $processUserRatio1d;

    /**
     * @description 最近7天使用审批的用户比率
     * @var string
     */
    public $processUserRatio1w;

    /**
     * @description 最近1天沟通用户数
     * @var string
     */
    public $sendMessageUserCnt1d;

    /**
     * @description 最近7天沟通用户数
     * @var string
     */
    public $sendMessageUserCnt1w;

    /**
     * @description 最近1天沟通率
     * @var string
     */
    public $sendMessageUserRatio1d;

    /**
     * @description 最近7天沟通率
     * @var string
     */
    public $sendMessageUserRatio1w;

    /**
     * @description 所辖组织的地理纬度
     * @var string
     */
    public $subOrgAreaLat;

    /**
     * @description 所辖组织的地理经度
     * @var string
     */
    public $subOrgAreaLng;

    /**
     * @description 所辖组织名称
     * @var string
     */
    public $subOrgName;

}
