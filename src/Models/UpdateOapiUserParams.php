<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiUserParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'name' => 'name',
        'workPlace' => 'workPlace',
        'remark' => 'remark',
        'isSenior' => 'isSenior',
        'orgEmail' => 'orgEmail',
        'managerUserid' => 'managerUserid',
        'tel' => 'tel',
        'orderInDepts' => 'orderInDepts',
        'mobile' => 'mobile',
        'department' => 'department',
        'email' => 'email',
        'position' => 'position',
        'extattr' => 'extattr',
        'jobnumber' => 'jobnumber',
        'isHide' => 'isHide',
        'lang' => 'lang',
        'hiredDate' => 'hiredDate',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->workPlace) {
            $res['workPlace'] = $this->workPlace;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->isSenior) {
            $res['isSenior'] = $this->isSenior;
        }
        if (null !== $this->orgEmail) {
            $res['orgEmail'] = $this->orgEmail;
        }
        if (null !== $this->managerUserid) {
            $res['managerUserid'] = $this->managerUserid;
        }
        if (null !== $this->tel) {
            $res['tel'] = $this->tel;
        }
        if (null !== $this->orderInDepts) {
            $res['orderInDepts'] = $this->orderInDepts;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->extattr) {
            $res['extattr'] = $this->extattr;
        }
        if (null !== $this->jobnumber) {
            $res['jobnumber'] = $this->jobnumber;
        }
        if (null !== $this->isHide) {
            $res['isHide'] = $this->isHide;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['workPlace'])){
            $model->workPlace = $map['workPlace'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['isSenior'])){
            $model->isSenior = $map['isSenior'];
        }
        if(isset($map['orgEmail'])){
            $model->orgEmail = $map['orgEmail'];
        }
        if(isset($map['managerUserid'])){
            $model->managerUserid = $map['managerUserid'];
        }
        if(isset($map['tel'])){
            $model->tel = $map['tel'];
        }
        if(isset($map['orderInDepts'])){
            $model->orderInDepts = $map['orderInDepts'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['department'])){
            if(!empty($map['department'])){
                $model->department = $map['department'];
            }
        }
        if(isset($map['email'])){
            $model->email = $map['email'];
        }
        if(isset($map['position'])){
            $model->position = $map['position'];
        }
        if(isset($map['extattr'])){
            $model->extattr = $map['extattr'];
        }
        if(isset($map['jobnumber'])){
            $model->jobnumber = $map['jobnumber'];
        }
        if(isset($map['isHide'])){
            $model->isHide = $map['isHide'];
        }
        if(isset($map['lang'])){
            $model->lang = $map['lang'];
        }
        if(isset($map['hiredDate'])){
            $model->hiredDate = $map['hiredDate'];
        }
        return $model;
    }
    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 名字
     * @var string
     */
    public $name;

    /**
     * @description 工作地点
     * @var string
     */
    public $workPlace;

    /**
     * @description 备注
     * @var string
     */
    public $remark;

    /**
     * @description 是否高管模式
     * @var bool
     */
    public $isSenior;

    /**
     * @description 公司邮箱
     * @var string
     */
    public $orgEmail;

    /**
     * @description 主管
     * @var string
     */
    public $managerUserid;

    /**
     * @description 分机号，长度为0~50个字符
     * @var string
     */
    public $tel;

    /**
     * @description 实际是Map的序列化字符串
     * @var string
     */
    public $orderInDepts;

    /**
     * @description 手机号
     * @var string
     */
    public $mobile;

    /**
     * @description 部门列表
     * @var array
     */
    public $department;

    /**
     * @description 邮箱
     * @var string
     */
    public $email;

    /**
     * @description 职位
     * @var string
     */
    public $position;

    /**
     * @description 扩展属性
     * @var string
     */
    public $extattr;

    /**
     * @description 工号
     * @var string
     */
    public $jobnumber;

    /**
     * @description 是否号码隐藏
     * @var bool
     */
    public $isHide;

    /**
     * @description 通讯录语言(默认zh_CN另外支持en_US)
     * @var string
     */
    public $lang;

    /**
     * @description 入职时间
     * @var int
     */
    public $hiredDate;

}
