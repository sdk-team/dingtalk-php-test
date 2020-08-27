<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SimplelistOapiReportResponseBody\result;

use AlibabaCloud\Tea\Model;

class dataList extends Model {
    protected $_name = [
        'remark' => 'remark',
        'templateName' => 'template_name',
        'deptName' => 'dept_name',
        'creatorName' => 'creator_name',
        'creatorId' => 'creator_id',
        'createTime' => 'create_time',
        'reportId' => 'report_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->templateName) {
            $res['template_name'] = $this->templateName;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->creatorName) {
            $res['creator_name'] = $this->creatorName;
        }
        if (null !== $this->creatorId) {
            $res['creator_id'] = $this->creatorId;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->reportId) {
            $res['report_id'] = $this->reportId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dataList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['template_name'])){
            $model->templateName = $map['template_name'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['creator_name'])){
            $model->creatorName = $map['creator_name'];
        }
        if(isset($map['creator_id'])){
            $model->creatorId = $map['creator_id'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['report_id'])){
            $model->reportId = $map['report_id'];
        }
        return $model;
    }
    /**
     * @description 备注
     * @var string
     */
    public $remark;

    /**
     * @description 日志模板名
     * @var string
     */
    public $templateName;

    /**
     * @description 部门
     * @var string
     */
    public $deptName;

    /**
     * @description 日志创建人
     * @var string
     */
    public $creatorName;

    /**
     * @description 日志创建人userid
     * @var string
     */
    public $creatorId;

    /**
     * @description 日志创建时间
     * @var int
     */
    public $createTime;

    /**
     * @description 日志唯一id
     * @var string
     */
    public $reportId;

}
