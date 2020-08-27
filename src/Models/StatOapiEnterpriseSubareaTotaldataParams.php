<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseSubareaTotaldataParams\orderBy;

class StatOapiEnterpriseSubareaTotaldataParams extends Model {
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
     * @return StatOapiEnterpriseSubareaTotaldataParams
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
     * @description act_ratio_1d_001	所辖区域活跃率; act_usr_cnt_1d_001	活跃用户数最近1天; active_mbr_cnt_std_001	历史截至当日激活会员数; active_mbr_ratio	所辖区域用户的激活率; city_lat	所属城市维度; city_lng	所属城市经度; county_lat	区/县纬度; county_lng	区/县经度; mbr_cnt_std_063	历史截至当日企业会员数; online_org_cnt	所辖区域在线组织数	; org_online_ratio	所辖区域组织覆盖率	; real_org_cnt	所辖区域实际组织数	; send_message_cnt_1d	发送消息数量; send_message_user_cnt_1d	发送消息人数;
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
