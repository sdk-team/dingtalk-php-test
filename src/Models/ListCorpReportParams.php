<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListCorpReportParams extends Model {
    protected $_name = [
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'templateName' => 'template_name',
        'userid' => 'userid',
        'cursor' => 'cursor',
        'size' => 'size',
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
        return $res;
    }
    /**
     * @param array $map
     * @return ListCorpReportParams
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
        return $model;
    }
    /**
     * @description 查询起始时间
     * @var int
     */
    public $startTime;

    /**
     * @description 查询截止时间
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

}
