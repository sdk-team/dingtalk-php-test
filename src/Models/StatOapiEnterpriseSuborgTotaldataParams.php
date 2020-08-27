<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseSuborgTotaldataParams\orderBy;

class StatOapiEnterpriseSuborgTotaldataParams extends Model {
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
     * @return StatOapiEnterpriseSuborgTotaldataParams
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
     * @description act_ratio_1d_001	最近1天活跃率； act_ratio_1w_001	最近7天活跃率； act_usr_cnt_1d_001	活跃用户数最近1天； act_usr_cnt_1w_001	最近7天活跃用户数； active_mbr_cnt_std_001	历史截至当日激活会员数； active_ratio	激活率； ding_index_1d	最近1天钉钉指数； ding_index_1w	最近7天钉钉指数； mbr_cnt_std_063	历史截至当日企业会员数	； micro_app_use_ratio_1d	最近1天使用钉钉微应用用户比率；micro_app_use_ratio_1w	最近7天使用钉钉微应用用户比率；micro_app_user_cnt_1d	最近1天使用钉钉微应用用户数；micro_app_user_cnt_1w	最近7天使用钉钉微应用用户数；pm_form_cnt_001	审批模板数； pm_form_cnt_002	自定义模板数； pm_form_self_def_ratio	自定义模板比率； process_user_cnt_1d	最近1天使用审批用户数； process_user_cnt_1w	最近7天使用审批用户数；process_user_ratio_1d	最近1天使用审批的用户比率；process_user_ratio_1w	最近7天使用审批的用户比率；send_message_user_cnt_1d	最近1天沟通用户数；send_message_user_cnt_1w	最近7天沟通用户数；send_message_user_ratio_1d	最近1天沟通率； send_message_user_ratio_1w	最近7天沟通率； sub_org_area_lat	所辖组织的地理纬度	； sub_org_area_lng	所辖组织的地理经度	； sub_org_name	所辖组织名称；
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
