<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProductionteamResponseBody\model;

use AlibabaCloud\Tea\Model;

class empList extends Model {
    protected $_name = [
        'workStatus' => 'work_status',
        'hireDate' => 'hire_date',
        'dingtalkUserId' => 'dingtalk_user_id',
        'uicId' => 'uic_id',
        'dingtalkNo' => 'dingtalk_no',
        'workNo' => 'work_no',
        'bucId' => 'buc_id',
        'imgUrl' => 'img_url',
        'name' => 'name',
        'buMail' => 'bu_mail',
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
        if (null !== $this->dingtalkUserId) {
            $res['dingtalk_user_id'] = $this->dingtalkUserId;
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
     * @return empList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['work_status'])){
            $model->workStatus = $map['work_status'];
        }
        if(isset($map['hire_date'])){
            $model->hireDate = $map['hire_date'];
        }
        if(isset($map['dingtalk_user_id'])){
            $model->dingtalkUserId = $map['dingtalk_user_id'];
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
     * @description 在岗状态
     * @var int
     */
    public $workStatus;

    /**
     * @description 入职日期
     * @var string
     */
    public $hireDate;

    /**
     * @description 企业下员工id
     * @var string
     */
    public $dingtalkUserId;

    /**
     * @description uicId
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
     * @description BUC员工ID
     * @var int
     */
    public $bucId;

    /**
     * @description 头像地址
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
