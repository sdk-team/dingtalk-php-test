<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseMainorgTotaldataParams\orderBy;

class StatOapiEnterpriseMainorgTotaldataParams extends Model {
    protected $_name = [
        'statDate' => 'stat_date',
        'corpId' => 'corp_id',
        'returnFields' => 'return_fields',
        'orderBy' => 'order_by',
        'pageStart' => 'page_start',
        'pageSize' => 'page_size',
    ];
    public function validate() {
        Model::validateRequired('statDate', $this->statDate, true);
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('returnFields', $this->returnFields, true);
        Model::validateRequired('pageStart', $this->pageStart, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->returnFields) {
            $res['return_fields'] = $this->returnFields;
        }
        if (null !== $this->orderBy) {
            $res['order_by'] = null !== $this->orderBy ? $this->orderBy->toMap() : null;
        }
        if (null !== $this->pageStart) {
            $res['page_start'] = $this->pageStart;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return StatOapiEnterpriseMainorgTotaldataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['return_fields'])){
            if(!empty($map['return_fields'])){
                $model->returnFields = $map['return_fields'];
            }
        }
        if(isset($map['order_by'])){
            $model->orderBy = orderBy::fromMap($map['order_by']);
        }
        if(isset($map['page_start'])){
            $model->pageStart = $map['page_start'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
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
     * @description active_mbr_cnt_std	在线组织激活用户数	； all_group_cnt	全员群数量； carbon_amount_1d	最近1天降低碳排量G； carbon_amount_1w	最近7天降低碳排量G； corp_id	企业ID； dept_group_cnt	部门群数量； ding_save_hour_1d	最近1天钉办节约小时； ding_save_hour_1w	最近7天钉办节约小时； inner_group_cnt	内部群数量； live_launch_succ_cnt_1d	最近1天成功发起直播次数；live_launch_succ_cnt_1w	最近7天成功发起直播次数； mbr_cnt_std	在线组织通讯录人数（注册人数）；online_conference_cnt_1d	最近1天在线会议次数；online_conference_cnt_7d	最近7天在线会议次数； online_org_cnt	在线组织数； org_online_ratio	组织覆盖率； real_org_cnt	实际组织数； receive_ding_user_cnt_1d	最近1天接收DING的用户数；receive_ding_user_cnt_1w	最近7天接收DING的用户数； rel_org_cnt	关联组织数 send_message_user_cnt_1d	最近1天发送消息人数；send_message_user_cnt_1w	最近7天发送消息人数； stat_date	统计日期
     * @var array
     */
    public $returnFields;

    /**
     * @description 排序
     * @var orderBy
     */
    public $orderBy;

    /**
     * @description 分页起始点
     * @var int
     */
    public $pageStart;

    /**
     * @description 分页查询条数，最多30条
     * @var int
     */
    public $pageSize;

}
