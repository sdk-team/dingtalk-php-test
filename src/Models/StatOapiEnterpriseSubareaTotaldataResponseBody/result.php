<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseSubareaTotaldataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'statDate' => 'stat_date',
        'corpId' => 'corp_id',
        'actRatio1d' => 'act_ratio_1d',
        'actUsrCn1d' => 'act_usr_cn_1d',
        'activeMbrCntStd' => 'active_mbr_cnt_std',
        'activeMbrRatio' => 'active_mbr_ratio',
        'cityLat' => 'city_lat',
        'cityLng' => 'city_lng',
        'countyLat' => 'county_lat',
        'countyLng' => 'county_lng',
        'mbrCntStd' => 'mbr_cnt_std',
        'onlineOrgCnt' => 'online_org_cnt',
        'orgOnlineRatio' => 'org_online_ratio',
        'realOrgCnt' => 'real_org_cnt',
        'sendMessageCnt1d' => 'send_message_cnt_1d',
        'sendMessageUserCnt1d' => 'send_message_user_cnt_1d',
        'cityName' => 'city_name',
        'countyName' => 'county_name',
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
        if (null !== $this->actUsrCn1d) {
            $res['act_usr_cn_1d'] = $this->actUsrCn1d;
        }
        if (null !== $this->activeMbrCntStd) {
            $res['active_mbr_cnt_std'] = $this->activeMbrCntStd;
        }
        if (null !== $this->activeMbrRatio) {
            $res['active_mbr_ratio'] = $this->activeMbrRatio;
        }
        if (null !== $this->cityLat) {
            $res['city_lat'] = $this->cityLat;
        }
        if (null !== $this->cityLng) {
            $res['city_lng'] = $this->cityLng;
        }
        if (null !== $this->countyLat) {
            $res['county_lat'] = $this->countyLat;
        }
        if (null !== $this->countyLng) {
            $res['county_lng'] = $this->countyLng;
        }
        if (null !== $this->mbrCntStd) {
            $res['mbr_cnt_std'] = $this->mbrCntStd;
        }
        if (null !== $this->onlineOrgCnt) {
            $res['online_org_cnt'] = $this->onlineOrgCnt;
        }
        if (null !== $this->orgOnlineRatio) {
            $res['org_online_ratio'] = $this->orgOnlineRatio;
        }
        if (null !== $this->realOrgCnt) {
            $res['real_org_cnt'] = $this->realOrgCnt;
        }
        if (null !== $this->sendMessageCnt1d) {
            $res['send_message_cnt_1d'] = $this->sendMessageCnt1d;
        }
        if (null !== $this->sendMessageUserCnt1d) {
            $res['send_message_user_cnt_1d'] = $this->sendMessageUserCnt1d;
        }
        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }
        if (null !== $this->countyName) {
            $res['county_name'] = $this->countyName;
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
        if(isset($map['act_usr_cn_1d'])){
            $model->actUsrCn1d = $map['act_usr_cn_1d'];
        }
        if(isset($map['active_mbr_cnt_std'])){
            $model->activeMbrCntStd = $map['active_mbr_cnt_std'];
        }
        if(isset($map['active_mbr_ratio'])){
            $model->activeMbrRatio = $map['active_mbr_ratio'];
        }
        if(isset($map['city_lat'])){
            $model->cityLat = $map['city_lat'];
        }
        if(isset($map['city_lng'])){
            $model->cityLng = $map['city_lng'];
        }
        if(isset($map['county_lat'])){
            $model->countyLat = $map['county_lat'];
        }
        if(isset($map['county_lng'])){
            $model->countyLng = $map['county_lng'];
        }
        if(isset($map['mbr_cnt_std'])){
            $model->mbrCntStd = $map['mbr_cnt_std'];
        }
        if(isset($map['online_org_cnt'])){
            $model->onlineOrgCnt = $map['online_org_cnt'];
        }
        if(isset($map['org_online_ratio'])){
            $model->orgOnlineRatio = $map['org_online_ratio'];
        }
        if(isset($map['real_org_cnt'])){
            $model->realOrgCnt = $map['real_org_cnt'];
        }
        if(isset($map['send_message_cnt_1d'])){
            $model->sendMessageCnt1d = $map['send_message_cnt_1d'];
        }
        if(isset($map['send_message_user_cnt_1d'])){
            $model->sendMessageUserCnt1d = $map['send_message_user_cnt_1d'];
        }
        if(isset($map['city_name'])){
            $model->cityName = $map['city_name'];
        }
        if(isset($map['county_name'])){
            $model->countyName = $map['county_name'];
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
     * @description 所辖区域活跃率
     * @var string
     */
    public $actRatio1d;

    /**
     * @description 活跃用户数最近1天
     * @var string
     */
    public $actUsrCn1d;

    /**
     * @description 历史截至当日激活会员数
     * @var string
     */
    public $activeMbrCntStd;

    /**
     * @description 所辖区域用户的激活率
     * @var string
     */
    public $activeMbrRatio;

    /**
     * @description 所属城市维度
     * @var string
     */
    public $cityLat;

    /**
     * @description 所属城市经度
     * @var string
     */
    public $cityLng;

    /**
     * @description 区/县纬度
     * @var string
     */
    public $countyLat;

    /**
     * @description 区/县经度
     * @var string
     */
    public $countyLng;

    /**
     * @description 历史截至当日企业会员数
     * @var string
     */
    public $mbrCntStd;

    /**
     * @description 所辖区域在线组织数
     * @var string
     */
    public $onlineOrgCnt;

    /**
     * @description 所辖区域组织覆盖率
     * @var string
     */
    public $orgOnlineRatio;

    /**
     * @description 所辖区域实际组织数
     * @var string
     */
    public $realOrgCnt;

    /**
     * @description 发送消息数量
     * @var string
     */
    public $sendMessageCnt1d;

    /**
     * @description 发送消息人数
     * @var string
     */
    public $sendMessageUserCnt1d;

    /**
     * @description 城市名称
     * @var string
     */
    public $cityName;

    /**
     * @description 城市所在区域
     * @var string
     */
    public $countyName;

}
