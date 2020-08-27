<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiCspaceAuditlogParams extends Model {
    protected $_name = [
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'pageSize' => 'page_size',
        'loadMoreGmtCreate' => 'load_more_gmt_create',
        'loadMoreBizId' => 'load_more_biz_id',
    ];
    public function validate() {
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->loadMoreGmtCreate) {
            $res['load_more_gmt_create'] = $this->loadMoreGmtCreate;
        }
        if (null !== $this->loadMoreBizId) {
            $res['load_more_biz_id'] = $this->loadMoreBizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiCspaceAuditlogParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['load_more_gmt_create'])){
            $model->loadMoreGmtCreate = $map['load_more_gmt_create'];
        }
        if(isset($map['load_more_biz_id'])){
            $model->loadMoreBizId = $map['load_more_biz_id'];
        }
        return $model;
    }
    /**
     * @description 操作日志起始时间，unix时间戳，单位ms
     * @var int
     */
    public $startDate;

    /**
     * @description 操作日志截止时间，unix时间戳，单位ms
     * @var int
     */
    public $endDate;

    /**
     * @description 操作列表长度，最大500
     * @var int
     */
    public $pageSize;

    /**
     * @description 操作记录生成时间，作为分页偏移量，分页查询时必传，unix时间戳，单位ms
     * @var int
     */
    public $loadMoreGmtCreate;

    /**
     * @description 操作记录文件id，作为分页偏移量，与load_more_gmt_create一起使用，返回记录的biz_id为load_more_biz_id且gmt_create为load_more_gmt_create之后的操作列表，分页查询获取下一页时，传最后一条记录的biz_id和gmt_create。
     * @var int
     */
    public $loadMoreBizId;

}
