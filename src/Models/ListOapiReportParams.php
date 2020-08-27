<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiReportParams extends Model {
    protected $_name = [
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'templateName' => 'template_name',
        'userid' => 'userid',
        'cursor' => 'cursor',
        'size' => 'size',
        'modifiedStartTime' => 'modified_start_time',
        'modifiedEndTime' => 'modified_end_time',
    ];
    public function validate() {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->templateName) {
            $res['template_name'] = $this->templateName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->modifiedStartTime) {
            $res['modified_start_time'] = $this->modifiedStartTime;
        }
        if (null !== $this->modifiedEndTime) {
            $res['modified_end_time'] = $this->modifiedEndTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiReportParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['template_name'])){
            $model->templateName = $map['template_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['modified_start_time'])){
            $model->modifiedStartTime = $map['modified_start_time'];
        }
        if(isset($map['modified_end_time'])){
            $model->modifiedEndTime = $map['modified_end_time'];
        }
        return $model;
    }
    /**
     * @description 查询的日志创建的开始时间
     * @var int
     */
    public $startTime;

    /**
     * @description 查询的日志创建的结束时间
     * @var int
     */
    public $endTime;

    /**
     * @description 要查询的模板名称
     * @var string
     */
    public $templateName;

    /**
     * @description 员工的userid
     * @var string
     */
    public $userid;

    /**
     * @description 查询游标，初始传入0，后续从上一次的返回值中获取
     * @var int
     */
    public $cursor;

    /**
     * @description 每页数据量
     * @var int
     */
    public $size;

    /**
     * @description 查询的日志修改的开始时间
     * @var int
     */
    public $modifiedStartTime;

    /**
     * @description 查询的日志修改的结束时间
     * @var int
     */
    public $modifiedEndTime;

}
