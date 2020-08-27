<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAtsPluginStatisticsJobResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'corpId' => 'corp_id',
        'jobId' => 'job_id',
        'name' => 'name',
        'status' => 'status',
        'mainDeptId' => 'main_dept_id',
        'headCount' => 'head_count',
        'ownerUserid' => 'owner_userid',
        'creatorUserid' => 'creator_userid',
        'gmtCreateMils' => 'gmt_create_mils',
        'gmtModifiedMils' => 'gmt_modified_mils',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->jobId) {
            $res['job_id'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->mainDeptId) {
            $res['main_dept_id'] = $this->mainDeptId;
        }
        if (null !== $this->headCount) {
            $res['head_count'] = $this->headCount;
        }
        if (null !== $this->ownerUserid) {
            $res['owner_userid'] = $this->ownerUserid;
        }
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->gmtCreateMils) {
            $res['gmt_create_mils'] = $this->gmtCreateMils;
        }
        if (null !== $this->gmtModifiedMils) {
            $res['gmt_modified_mils'] = $this->gmtModifiedMils;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['job_id'])){
            $model->jobId = $map['job_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['main_dept_id'])){
            $model->mainDeptId = $map['main_dept_id'];
        }
        if(isset($map['head_count'])){
            $model->headCount = $map['head_count'];
        }
        if(isset($map['owner_userid'])){
            $model->ownerUserid = $map['owner_userid'];
        }
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['gmt_create_mils'])){
            $model->gmtCreateMils = $map['gmt_create_mils'];
        }
        if(isset($map['gmt_modified_mils'])){
            $model->gmtModifiedMils = $map['gmt_modified_mils'];
        }
        return $model;
    }
    /**
     * @description 招聘业务标识
     * @var string
     */
    public $bizCode;

    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 职位id
     * @var string
     */
    public $jobId;

    /**
     * @description 职位名称
     * @var string
     */
    public $name;

    /**
     * @description 0：新创建  1：已发布  2：废弃  3：招满
     * @var int
     */
    public $status;

    /**
     * @description 职位归属部门id
     * @var int
     */
    public $mainDeptId;

    /**
     * @description 招聘人数
     * @var int
     */
    public $headCount;

    /**
     * @description 职位负责人id
     * @var string
     */
    public $ownerUserid;

    /**
     * @description 职位创建人id
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 创建时间，unix时间戳，单位毫秒
     * @var int
     */
    public $gmtCreateMils;

    /**
     * @description 更新时间，unix时间戳，单位毫秒
     * @var int
     */
    public $gmtModifiedMils;

}
