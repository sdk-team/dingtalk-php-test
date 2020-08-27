<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseMicroappUsedataParams\orderBy;

class StatOapiEnterpriseMicroappUsedataParams extends Model {
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
     * @return StatOapiEnterpriseMicroappUsedataParams
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
     * @description agent_name	组织微应用名称; open_micro_user_cnt_1d	最近1天打开微应用用户数; open_micro_user_cnt_1w	最近7天打开微应用用户数;
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
