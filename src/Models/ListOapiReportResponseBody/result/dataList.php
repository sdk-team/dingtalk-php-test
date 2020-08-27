<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiReportResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiReportResponseBody\result\dataList\contents;

class dataList extends Model {
    protected $_name = [
        'contents' => 'contents',
        'remark' => 'remark',
        'templateName' => 'template_name',
        'deptName' => 'dept_name',
        'creatorName' => 'creator_name',
        'creatorId' => 'creator_id',
        'createTime' => 'create_time',
        'reportId' => 'report_id',
        'images' => 'images',
        'longitude' => 'longitude',
        'latitude' => 'latitude',
        'modifiedTime' => 'modified_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->contents) {
            $res['contents'] = [];
            if(null !== $this->contents && is_array($this->contents)){
                $n = 0;
                foreach($this->contents as $item){
                    $res['contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->images) {
            $res['images'] = $this->images;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->modifiedTime) {
            $res['modified_time'] = $this->modifiedTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dataList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['contents'])){
            if(!empty($map['contents'])){
                $model->contents = [];
                $n = 0;
                foreach($map['contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
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
        if(isset($map['images'])){
            if(!empty($map['images'])){
                $model->images = $map['images'];
            }
        }
        if(isset($map['longitude'])){
            $model->longitude = $map['longitude'];
        }
        if(isset($map['latitude'])){
            $model->latitude = $map['latitude'];
        }
        if(isset($map['modified_time'])){
            $model->modifiedTime = $map['modified_time'];
        }
        return $model;
    }
    /**
     * @description 日志内容
     * @var array
     */
    public $contents;

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

    /**
     * @description 日志图片列表
     * @var array
     */
    public $images;

    /**
     * @description 提交日志时点击获取位置，定位到的经度（没有获取位置则为空），此字段的值默认为空，需要单独申请开通
     * @var string
     */
    public $longitude;

    /**
     * @description 提交日志时点击获取位置，定位到的纬度（没有获取位置则为空），此字段的值默认为空，需要单独申请开通
     * @var string
     */
    public $latitude;

    /**
     * @description 日志修改时间
     * @var int
     */
    public $modifiedTime;

}
