<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListidsOapiProcessinstanceParams extends Model {
    protected $_name = [
        'processCode' => 'process_code',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'size' => 'size',
        'cursor' => 'cursor',
        'useridList' => 'userid_list',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
        Model::validateRequired('startTime', $this->startTime, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListidsOapiProcessinstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 流程模板唯一标识，可在oa后台编辑审批表单部分查询
     * @var string
     */
    public $processCode;

    /**
     * @description 审批实例开始时间，毫秒级
     * @var int
     */
    public $startTime;

    /**
     * @description 审批实例结束时间，毫秒级，默认取当前值
     * @var int
     */
    public $endTime;

    /**
     * @description 分页参数，每页大小，最多传10
     * @var int
     */
    public $size;

    /**
     * @description 分页查询的游标，最开始传0，后续传返回参数中的next_cursor值
     * @var int
     */
    public $cursor;

    /**
     * @description 发起人用户id列表
     * @var array
     */
    public $useridList;

}
