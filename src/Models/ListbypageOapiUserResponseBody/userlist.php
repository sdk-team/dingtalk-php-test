<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypageOapiUserResponseBody;

use AlibabaCloud\Tea\Model;

class userlist extends Model {
    protected $_name = [
        'userid' => 'userid',
        'order' => 'order',
        'dingId' => 'dingId',
        'unionid' => 'unionid',
        'mobile' => 'mobile',
        'tel' => 'tel',
        'workPlace' => 'workPlace',
        'remark' => 'remark',
        'isAdmin' => 'isAdmin',
        'isBoss' => 'isBoss',
        'isHide' => 'isHide',
        'isLeader' => 'isLeader',
        'name' => 'name',
        'active' => 'active',
        'department' => 'department',
        'position' => 'position',
        'email' => 'email',
        'orgEmail' => 'orgEmail',
        'avatar' => 'avatar',
        'jobnumber' => 'jobnumber',
        'hiredDate' => 'hiredDate',
        'extattr' => 'extattr',
    ];
    public function validate() {
        Model::validatePattern('hiredDate', $this->hiredDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->dingId) {
            $res['dingId'] = $this->dingId;
        }
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->tel) {
            $res['tel'] = $this->tel;
        }
        if (null !== $this->workPlace) {
            $res['workPlace'] = $this->workPlace;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->isAdmin) {
            $res['isAdmin'] = $this->isAdmin;
        }
        if (null !== $this->isBoss) {
            $res['isBoss'] = $this->isBoss;
        }
        if (null !== $this->isHide) {
            $res['isHide'] = $this->isHide;
        }
        if (null !== $this->isLeader) {
            $res['isLeader'] = $this->isLeader;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->orgEmail) {
            $res['orgEmail'] = $this->orgEmail;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->jobnumber) {
            $res['jobnumber'] = $this->jobnumber;
        }
        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }
        if (null !== $this->extattr) {
            $res['extattr'] = $this->extattr;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userlist
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['order'])){
            $model->order = $map['order'];
        }
        if(isset($map['dingId'])){
            $model->dingId = $map['dingId'];
        }
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['tel'])){
            $model->tel = $map['tel'];
        }
        if(isset($map['workPlace'])){
            $model->workPlace = $map['workPlace'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['isAdmin'])){
            $model->isAdmin = $map['isAdmin'];
        }
        if(isset($map['isBoss'])){
            $model->isBoss = $map['isBoss'];
        }
        if(isset($map['isHide'])){
            $model->isHide = $map['isHide'];
        }
        if(isset($map['isLeader'])){
            $model->isLeader = $map['isLeader'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['active'])){
            $model->active = $map['active'];
        }
        if(isset($map['department'])){
            if(!empty($map['department'])){
                $model->department = $map['department'];
            }
        }
        if(isset($map['position'])){
            $model->position = $map['position'];
        }
        if(isset($map['email'])){
            $model->email = $map['email'];
        }
        if(isset($map['orgEmail'])){
            $model->orgEmail = $map['orgEmail'];
        }
        if(isset($map['avatar'])){
            $model->avatar = $map['avatar'];
        }
        if(isset($map['jobnumber'])){
            $model->jobnumber = $map['jobnumber'];
        }
        if(isset($map['hiredDate'])){
            $model->hiredDate = $map['hiredDate'];
        }
        if(isset($map['extattr'])){
            $model->extattr = $map['extattr'];
        }
        return $model;
    }
    /**
     * @description userid
     * @var string
     */
    public $userid;

    /**
     * @description order
     * @var int
     */
    public $order;

    /**
     * @description dingId
     * @var string
     */
    public $dingId;

    /**
     * @description unionid
     * @var string
     */
    public $unionid;

    /**
     * @description mobile
     * @var string
     */
    public $mobile;

    /**
     * @description tel
     * @var string
     */
    public $tel;

    /**
     * @description workPlace
     * @var string
     */
    public $workPlace;

    /**
     * @description remark
     * @var string
     */
    public $remark;

    /**
     * @description isAdmin
     * @var bool
     */
    public $isAdmin;

    /**
     * @description isBoss
     * @var bool
     */
    public $isBoss;

    /**
     * @description isHide
     * @var bool
     */
    public $isHide;

    /**
     * @description isLeader
     * @var bool
     */
    public $isLeader;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description active
     * @var bool
     */
    public $active;

    /**
     * @description department
     * @var array
     */
    public $department;

    /**
     * @description position
     * @var string
     */
    public $position;

    /**
     * @description email
     * @var string
     */
    public $email;

    /**
     * @description orgEmail
     * @var string
     */
    public $orgEmail;

    /**
     * @description avatar
     * @var string
     */
    public $avatar;

    /**
     * @description jobnumber
     * @var string
     */
    public $jobnumber;

    /**
     * @description hiredDate
     * @var string
     */
    public $hiredDate;

    /**
     * @description extattr
     * @var string
     */
    public $extattr;

}
