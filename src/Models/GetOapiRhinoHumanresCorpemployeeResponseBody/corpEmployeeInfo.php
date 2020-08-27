<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoHumanresCorpemployeeResponseBody;

use AlibabaCloud\Tea\Model;

class corpEmployeeInfo extends Model {
    protected $_name = [
        'workStatus' => 'work_status',
        'hireDate' => 'hire_date',
        'corpId' => 'corp_id',
        'dingtalkUserId' => 'dingtalk_user_id',
        'mobile' => 'mobile',
        'uicId' => 'uic_id',
        'dingtalkNo' => 'dingtalk_no',
        'workNo' => 'work_no',
        'bucId' => 'buc_id',
        'imgUrl' => 'img_url',
        'name' => 'name',
        'buMail' => 'bu_mail',
        'id' => 'id',
        'departureDate' => 'departure_date',
        'job' => 'job',
        'status' => 'status',
    ];
    public function validate() {
        Model::validatePattern('hireDate', $this->hireDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('departureDate', $this->departureDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->workStatus) {
            $res['work_status'] = $this->workStatus;
        }
        if (null !== $this->hireDate) {
            $res['hire_date'] = $this->hireDate;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->dingtalkUserId) {
            $res['dingtalk_user_id'] = $this->dingtalkUserId;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->uicId) {
            $res['uic_id'] = $this->uicId;
        }
        if (null !== $this->dingtalkNo) {
            $res['dingtalk_no'] = $this->dingtalkNo;
        }
        if (null !== $this->workNo) {
            $res['work_no'] = $this->workNo;
        }
        if (null !== $this->bucId) {
            $res['buc_id'] = $this->bucId;
        }
        if (null !== $this->imgUrl) {
            $res['img_url'] = $this->imgUrl;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->buMail) {
            $res['bu_mail'] = $this->buMail;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->departureDate) {
            $res['departure_date'] = $this->departureDate;
        }
        if (null !== $this->job) {
            $res['job'] = $this->job;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return corpEmployeeInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['work_status'])){
            $model->workStatus = $map['work_status'];
        }
        if(isset($map['hire_date'])){
            $model->hireDate = $map['hire_date'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['dingtalk_user_id'])){
            $model->dingtalkUserId = $map['dingtalk_user_id'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['uic_id'])){
            $model->uicId = $map['uic_id'];
        }
        if(isset($map['dingtalk_no'])){
            $model->dingtalkNo = $map['dingtalk_no'];
        }
        if(isset($map['work_no'])){
            $model->workNo = $map['work_no'];
        }
        if(isset($map['buc_id'])){
            $model->bucId = $map['buc_id'];
        }
        if(isset($map['img_url'])){
            $model->imgUrl = $map['img_url'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['bu_mail'])){
            $model->buMail = $map['bu_mail'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['departure_date'])){
            $model->departureDate = $map['departure_date'];
        }
        if(isset($map['job'])){
            $model->job = $map['job'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 工作状态
     * @var int
     */
    public $workStatus;

    /**
     * @description 入职日期
     * @var string
     */
    public $hireDate;

    /**
     * @description 企业ID
     * @var string
     */
    public $corpId;

    /**
     * @description 钉钉企业下员工ID
     * @var string
     */
    public $dingtalkUserId;

    /**
     * @description 手机号
     * @var string
     */
    public $mobile;

    /**
     * @description uic ID
     * @var int
     */
    public $uicId;

    /**
     * @description 钉钉全局员工ID
     * @var string
     */
    public $dingtalkNo;

    /**
     * @description 工号
     * @var string
     */
    public $workNo;

    /**
     * @description buc ID
     * @var int
     */
    public $bucId;

    /**
     * @description 头像
     * @var string
     */
    public $imgUrl;

    /**
     * @description 姓名
     * @var string
     */
    public $name;

    /**
     * @description 部门邮箱
     * @var string
     */
    public $buMail;

    /**
     * @description 主键ID
     * @var int
     */
    public $id;

    /**
     * @description 离职日期
     * @var string
     */
    public $departureDate;

    /**
     * @description 职位
     * @var string
     */
    public $job;

    /**
     * @description 状态
     * @var int
     */
    public $status;

}
