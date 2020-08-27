<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiUserResponseBody\roles;

class GetOapiUserResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'userid' => 'userid',
        'unionid' => 'unionid',
        'managerUserId' => 'managerUserId',
        'hiredDate' => 'hiredDate',
        'tel' => 'tel',
        'remark' => 'remark',
        'workPlace' => 'workPlace',
        'name' => 'name',
        'position' => 'position',
        'mobile' => 'mobile',
        'stateCode' => 'stateCode',
        'mobileHash' => 'mobileHash',
        'email' => 'email',
        'orgEmail' => 'orgEmail',
        'isSenior' => 'isSenior',
        'isLimited' => 'isLimited',
        'openId' => 'openId',
        'jobnumber' => 'jobnumber',
        'active' => 'active',
        'nickname' => 'nickname',
        'avatar' => 'avatar',
        'extattr' => 'extattr',
        'inviteMobile' => 'inviteMobile',
        'roles' => 'roles',
        'department' => 'department',
        'orderInDepts' => 'orderInDepts',
        'isAdmin' => 'isAdmin',
        'dingId' => 'dingId',
        'isLeaderInDepts' => 'isLeaderInDepts',
        'isHide' => 'isHide',
        'isBoss' => 'isBoss',
        'isCustomizedPortal' => 'isCustomizedPortal',
        'memberView' => 'memberView',
        'associatedUnionId' => 'associatedUnionId',
        'realAuthed' => 'realAuthed',
    ];
    public function validate() {
        Model::validatePattern('hiredDate', $this->hiredDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->managerUserId) {
            $res['managerUserId'] = $this->managerUserId;
        }
        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }
        if (null !== $this->tel) {
            $res['tel'] = $this->tel;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->workPlace) {
            $res['workPlace'] = $this->workPlace;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->stateCode) {
            $res['stateCode'] = $this->stateCode;
        }
        if (null !== $this->mobileHash) {
            $res['mobileHash'] = $this->mobileHash;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->orgEmail) {
            $res['orgEmail'] = $this->orgEmail;
        }
        if (null !== $this->isSenior) {
            $res['isSenior'] = $this->isSenior;
        }
        if (null !== $this->isLimited) {
            $res['isLimited'] = $this->isLimited;
        }
        if (null !== $this->openId) {
            $res['openId'] = $this->openId;
        }
        if (null !== $this->jobnumber) {
            $res['jobnumber'] = $this->jobnumber;
        }
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->nickname) {
            $res['nickname'] = $this->nickname;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->extattr) {
            $res['extattr'] = $this->extattr;
        }
        if (null !== $this->inviteMobile) {
            $res['inviteMobile'] = $this->inviteMobile;
        }
        if (null !== $this->roles) {
            $res['roles'] = [];
            if(null !== $this->roles && is_array($this->roles)){
                $n = 0;
                foreach($this->roles as $item){
                    $res['roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->orderInDepts) {
            $res['orderInDepts'] = $this->orderInDepts;
        }
        if (null !== $this->isAdmin) {
            $res['isAdmin'] = $this->isAdmin;
        }
        if (null !== $this->dingId) {
            $res['dingId'] = $this->dingId;
        }
        if (null !== $this->isLeaderInDepts) {
            $res['isLeaderInDepts'] = $this->isLeaderInDepts;
        }
        if (null !== $this->isHide) {
            $res['isHide'] = $this->isHide;
        }
        if (null !== $this->isBoss) {
            $res['isBoss'] = $this->isBoss;
        }
        if (null !== $this->isCustomizedPortal) {
            $res['isCustomizedPortal'] = $this->isCustomizedPortal;
        }
        if (null !== $this->memberView) {
            $res['memberView'] = $this->memberView;
        }
        if (null !== $this->associatedUnionId) {
            $res['associatedUnionId'] = $this->associatedUnionId;
        }
        if (null !== $this->realAuthed) {
            $res['realAuthed'] = $this->realAuthed;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiUserResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['managerUserId'])){
            $model->managerUserId = $map['managerUserId'];
        }
        if(isset($map['hiredDate'])){
            $model->hiredDate = $map['hiredDate'];
        }
        if(isset($map['tel'])){
            $model->tel = $map['tel'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['workPlace'])){
            $model->workPlace = $map['workPlace'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['position'])){
            $model->position = $map['position'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['stateCode'])){
            $model->stateCode = $map['stateCode'];
        }
        if(isset($map['mobileHash'])){
            $model->mobileHash = $map['mobileHash'];
        }
        if(isset($map['email'])){
            $model->email = $map['email'];
        }
        if(isset($map['orgEmail'])){
            $model->orgEmail = $map['orgEmail'];
        }
        if(isset($map['isSenior'])){
            $model->isSenior = $map['isSenior'];
        }
        if(isset($map['isLimited'])){
            $model->isLimited = $map['isLimited'];
        }
        if(isset($map['openId'])){
            $model->openId = $map['openId'];
        }
        if(isset($map['jobnumber'])){
            $model->jobnumber = $map['jobnumber'];
        }
        if(isset($map['active'])){
            $model->active = $map['active'];
        }
        if(isset($map['nickname'])){
            $model->nickname = $map['nickname'];
        }
        if(isset($map['avatar'])){
            $model->avatar = $map['avatar'];
        }
        if(isset($map['extattr'])){
            $model->extattr = $map['extattr'];
        }
        if(isset($map['inviteMobile'])){
            $model->inviteMobile = $map['inviteMobile'];
        }
        if(isset($map['roles'])){
            if(!empty($map['roles'])){
                $model->roles = [];
                $n = 0;
                foreach($map['roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['department'])){
            if(!empty($map['department'])){
                $model->department = $map['department'];
            }
        }
        if(isset($map['orderInDepts'])){
            $model->orderInDepts = $map['orderInDepts'];
        }
        if(isset($map['isAdmin'])){
            $model->isAdmin = $map['isAdmin'];
        }
        if(isset($map['dingId'])){
            $model->dingId = $map['dingId'];
        }
        if(isset($map['isLeaderInDepts'])){
            $model->isLeaderInDepts = $map['isLeaderInDepts'];
        }
        if(isset($map['isHide'])){
            $model->isHide = $map['isHide'];
        }
        if(isset($map['isBoss'])){
            $model->isBoss = $map['isBoss'];
        }
        if(isset($map['isCustomizedPortal'])){
            $model->isCustomizedPortal = $map['isCustomizedPortal'];
        }
        if(isset($map['memberView'])){
            $model->memberView = $map['memberView'];
        }
        if(isset($map['associatedUnionId'])){
            $model->associatedUnionId = $map['associatedUnionId'];
        }
        if(isset($map['realAuthed'])){
            $model->realAuthed = $map['realAuthed'];
        }
        return $model;
    }
    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description userid
     * @var string
     */
    public $userid;

    /**
     * @description unionid
     * @var string
     */
    public $unionid;

    /**
     * @description managerUserId
     * @var string
     */
    public $managerUserId;

    /**
     * @description hiredDate
     * @var string
     */
    public $hiredDate;

    /**
     * @description tel
     * @var string
     */
    public $tel;

    /**
     * @description remark
     * @var string
     */
    public $remark;

    /**
     * @description workPlace
     * @var string
     */
    public $workPlace;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description position
     * @var string
     */
    public $position;

    /**
     * @description mobile
     * @var string
     */
    public $mobile;

    /**
     * @description stateCode
     * @var string
     */
    public $stateCode;

    /**
     * @description mobileHash
     * @var string
     */
    public $mobileHash;

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
     * @description isSenior
     * @var bool
     */
    public $isSenior;

    /**
     * @description isLimited
     * @var bool
     */
    public $isLimited;

    /**
     * @description openId
     * @var string
     */
    public $openId;

    /**
     * @description jobnumber
     * @var string
     */
    public $jobnumber;

    /**
     * @description active
     * @var bool
     */
    public $active;

    /**
     * @description nickname
     * @var string
     */
    public $nickname;

    /**
     * @description avatar
     * @var string
     */
    public $avatar;

    /**
     * @description extattr
     * @var string
     */
    public $extattr;

    /**
     * @description inviteMobile
     * @var string
     */
    public $inviteMobile;

    /**
     * @description roles
     * @var array
     */
    public $roles;

    /**
     * @description department
     * @var array
     */
    public $department;

    /**
     * @description orderInDepts
     * @var string
     */
    public $orderInDepts;

    /**
     * @description isAdmin
     * @var bool
     */
    public $isAdmin;

    /**
     * @description dingId
     * @var string
     */
    public $dingId;

    /**
     * @description isLeaderInDepts
     * @var string
     */
    public $isLeaderInDepts;

    /**
     * @description isHide
     * @var bool
     */
    public $isHide;

    /**
     * @description isBoss
     * @var bool
     */
    public $isBoss;

    /**
     * @description isCustomizedPortal
     * @var bool
     */
    public $isCustomizedPortal;

    /**
     * @description memberView
     * @var bool
     */
    public $memberView;

    /**
     * @description associatedUnionId
     * @var string
     */
    public $associatedUnionId;

    /**
     * @description realAuthed
     * @var bool
     */
    public $realAuthed;

}
