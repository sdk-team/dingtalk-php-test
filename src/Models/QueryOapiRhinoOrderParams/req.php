<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoOrderParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'keyWord' => 'key_word',
        'page' => 'page',
        'pageSize' => 'page_size',
        'planTimeBegin' => 'plan_time_begin',
        'planTimeEnd' => 'plan_time_end',
        'sort' => 'sort',
        'sortAsc' => 'sort_asc',
        'statusList' => 'status_list',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateMinimum('page', $this->page, 1);
        Model::validateMinimum('pageSize', $this->pageSize, 1);
        Model::validateMaximum('pageSize', $this->pageSize, 500);
        Model::validatePattern('planTimeBegin', $this->planTimeBegin, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planTimeEnd', $this->planTimeEnd, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->keyWord) {
            $res['key_word'] = $this->keyWord;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->planTimeBegin) {
            $res['plan_time_begin'] = $this->planTimeBegin;
        }
        if (null !== $this->planTimeEnd) {
            $res['plan_time_end'] = $this->planTimeEnd;
        }
        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }
        if (null !== $this->sortAsc) {
            $res['sort_asc'] = $this->sortAsc;
        }
        if (null !== $this->statusList) {
            $res['status_list'] = $this->statusList;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['key_word'])){
            $model->keyWord = $map['key_word'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['plan_time_begin'])){
            $model->planTimeBegin = $map['plan_time_begin'];
        }
        if(isset($map['plan_time_end'])){
            $model->planTimeEnd = $map['plan_time_end'];
        }
        if(isset($map['sort'])){
            $model->sort = $map['sort'];
        }
        if(isset($map['sort_asc'])){
            $model->sortAsc = $map['sort_asc'];
        }
        if(isset($map['status_list'])){
            if(!empty($map['status_list'])){
                $model->statusList = $map['status_list'];
            }
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 搜索字段
     * @var string
     */
    public $keyWord;

    /**
     * @description 分页字段，页数
     * @var int
     */
    public $page;

    /**
     * @description 分页字段，默认分页大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 计划开始时间-查询结束时间
     * @var string
     */
    public $planTimeBegin;

    /**
     * @description 计划开始时间-查询结束时间
     * @var string
     */
    public $planTimeEnd;

    /**
     * @description 排序字段
     * @var string
     */
    public $sort;

    /**
     * @description 是否顺序排序
     * @var bool
     */
    public $sortAsc;

    /**
     * @description 状态列表
     * @var array
     */
    public $statusList;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

}
