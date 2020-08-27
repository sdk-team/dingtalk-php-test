<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiUserParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'isSenior' => 'isSenior',
        'isHide' => 'isHide',
        'jobnumber' => 'jobnumber',
        'email' => 'email',
        'remark' => 'remark',
        'workPlace' => 'workPlace',
        'tel' => 'tel',
        'mobile' => 'mobile',
        'position' => 'position',
        'department' => 'department',
        'name' => 'name',
        'extattr' => 'extattr',
        'orgEmail' => 'orgEmail',
        'orderInDepts' => 'orderInDepts',
        'hiredDate' => 'hiredDate',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->isSenior) {
            $res['isSenior'] = $this->isSenior;
        }
        if (null !== $this->isHide) {
            $res['isHide'] = $this->isHide;
        }
        if (null !== $this->jobnumber) {
            $res['jobnumber'] = $this->jobnumber;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->workPlace) {
            $res['workPlace'] = $this->workPlace;
        }
        if (null !== $this->tel) {
            $res['tel'] = $this->tel;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->extattr) {
            $res['extattr'] = $this->extattr;
        }
        if (null !== $this->orgEmail) {
            $res['orgEmail'] = $this->orgEmail;
        }
        if (null !== $this->orderInDepts) {
            $res['orderInDepts'] = $this->orderInDepts;
        }
        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['isSenior'])){
            $model->isSenior = $map['isSenior'];
        }
        if(isset($map['isHide'])){
            $model->isHide = $map['isHide'];
        }
        if(isset($map['jobnumber'])){
            $model->jobnumber = $map['jobnumber'];
        }
        if(isset($map['email'])){
            $model->email = $map['email'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['workPlace'])){
            $model->workPlace = $map['workPlace'];
        }
        if(isset($map['tel'])){
            $model->tel = $map['tel'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['position'])){
            $model->position = $map['position'];
        }
        if(isset($map['department'])){
            $model->department = $map['department'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['extattr'])){
            $model->extattr = $map['extattr'];
        }
        if(isset($map['orgEmail'])){
            $model->orgEmail = $map['orgEmail'];
        }
        if(isset($map['orderInDepts'])){
            $model->orderInDepts = $map['orderInDepts'];
        }
        if(isset($map['hiredDate'])){
            $model->hiredDate = $map['hiredDate'];
        }
        return $model;
    }
    /**
     * @description 员工唯一标识ID（不可修改），企业内必须唯一。长度为1~64个字符，如果不传，服务器将自动生成一个userid
     * @var string
     */
    public $userid;

    /**
     * @description 是否高管模式，true表示是，false表示不是。开启后，手机号码对所有员工隐藏。普通员工无法对其发DING、发起钉钉免费商务电话。高管之间不受影响。
     * @var bool
     */
    public $isSenior;

    /**
     * @description 是否号码隐藏, true表示隐藏, false表示不隐藏。隐藏手机号后，手机号在个人资料页隐藏，但仍可对其发DING、发起钉钉免费商务电话。
     * @var bool
     */
    public $isHide;

    /**
     * @description 员工工号。对应显示到OA后台和客户端个人资料的工号栏目。长度为0~64个字符
     * @var string
     */
    public $jobnumber;

    /**
     * @description 邮箱。长度为0~64个字符。企业内必须唯一，不可重复
     * @var string
     */
    public $email;

    /**
     * @description 备注，长度为0~1000个字符
     * @var string
     */
    public $remark;

    /**
     * @description 办公地点，长度为0~50个字符
     * @var string
     */
    public $workPlace;

    /**
     * @description 分机号，长度为0~50个字符，企业内必须唯一，不可重复
     * @var string
     */
    public $tel;

    /**
     * @description 手机号码，企业内必须唯一，不可重复
     * @var string
     */
    public $mobile;

    /**
     * @description 职位信息。长度为0~64个字符
     * @var string
     */
    public $position;

    /**
     * @description 数组类型，数组里面值为整型，成员所属部门id列表
     * @var string
     */
    public $department;

    /**
     * @description 成员名称。长度为1~64个字符
     * @var string
     */
    public $name;

    /**
     * @description 扩展属性，可以设置多种属性(但手机上最多只能显示10个扩展属性，具体显示哪些属性，请到OA管理后台->设置->通讯录信息设置和OA管理后台->设置->手机端显示信息设置)
     * @var string
     */
    public $extattr;

    /**
     * @description 员工的企业邮箱，员工的企业邮箱已开通，才能增加此字段， 否则会报错
     * @var string
     */
    public $orgEmail;

    /**
     * @description 在对应的部门中的排序, Map结构的json字符串, key是部门的Id, value是人员在这个部门的排序值
     * @var string
     */
    public $orderInDepts;

    /**
     * @description 入职时间
     * @var int
     */
    public $hiredDate;

}
