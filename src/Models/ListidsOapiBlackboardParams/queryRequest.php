<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListidsOapiBlackboardParams;

use AlibabaCloud\Tea\Model;

class queryRequest extends Model {
    protected $_name = [
        'operationUserid' => 'operation_userid',
        'pageSize' => 'page_size',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'page' => 'page',
        'categoryId' => 'category_id',
    ];
    public function validate() {
        Model::validateRequired('operationUserid', $this->operationUserid, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('page', $this->page, true);
        Model::validatePattern('startTime', $this->startTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->operationUserid) {
            $res['operation_userid'] = $this->operationUserid;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->categoryId) {
            $res['category_id'] = $this->categoryId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return queryRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['operation_userid'])){
            $model->operationUserid = $map['operation_userid'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['category_id'])){
            $model->categoryId = $map['category_id'];
        }
        return $model;
    }
    /**
     * @description 操作人userId(必须是公告管理员)
     * @var string
     */
    public $operationUserid;

    /**
     * @description 分页大小，必须为正整数，且不超过30
     * @var int
     */
    public $pageSize;

    /**
     * @description 开始时间(闭区间）
     * @var string
     */
    public $startTime;

    /**
     * @description 结束时间(开区间）
     * @var string
     */
    public $endTime;

    /**
     * @description 页码，从1开始且必须为正整数
     * @var int
     */
    public $page;

    /**
     * @description 分类id，可以通过https://oapi.dingtalk.com/blackboard/category/get获取有效值
     * @var string
     */
    public $categoryId;

}
