<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiExtcontactResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'title' => 'title',
        'shareDeptIds' => 'share_dept_ids',
        'labelIds' => 'label_ids',
        'remark' => 'remark',
        'address' => 'address',
        'name' => 'name',
        'followerUserId' => 'follower_user_id',
        'stateCode' => 'state_code',
        'companyName' => 'company_name',
        'shareUserIds' => 'share_user_ids',
        'mobile' => 'mobile',
        'userid' => 'userid',
        'email' => 'email',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->shareDeptIds) {
            $res['share_dept_ids'] = $this->shareDeptIds;
        }
        if (null !== $this->labelIds) {
            $res['label_ids'] = $this->labelIds;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->followerUserId) {
            $res['follower_user_id'] = $this->followerUserId;
        }
        if (null !== $this->stateCode) {
            $res['state_code'] = $this->stateCode;
        }
        if (null !== $this->companyName) {
            $res['company_name'] = $this->companyName;
        }
        if (null !== $this->shareUserIds) {
            $res['share_user_ids'] = $this->shareUserIds;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['share_dept_ids'])){
            if(!empty($map['share_dept_ids'])){
                $model->shareDeptIds = $map['share_dept_ids'];
            }
        }
        if(isset($map['label_ids'])){
            if(!empty($map['label_ids'])){
                $model->labelIds = $map['label_ids'];
            }
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['follower_user_id'])){
            $model->followerUserId = $map['follower_user_id'];
        }
        if(isset($map['state_code'])){
            $model->stateCode = $map['state_code'];
        }
        if(isset($map['company_name'])){
            $model->companyName = $map['company_name'];
        }
        if(isset($map['share_user_ids'])){
            if(!empty($map['share_user_ids'])){
                $model->shareUserIds = $map['share_user_ids'];
            }
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['email'])){
            $model->email = $map['email'];
        }
        return $model;
    }
    /**
     * @description 职位
     * @var string
     */
    public $title;

    /**
     * @description 共享部门ID列表
     * @var array
     */
    public $shareDeptIds;

    /**
     * @description 标签
     * @var array
     */
    public $labelIds;

    /**
     * @description 备注
     * @var string
     */
    public $remark;

    /**
     * @description 地址
     * @var string
     */
    public $address;

    /**
     * @description 姓名
     * @var string
     */
    public $name;

    /**
     * @description 负责人UserID
     * @var string
     */
    public $followerUserId;

    /**
     * @description 国家码
     * @var string
     */
    public $stateCode;

    /**
     * @description 公司名
     * @var string
     */
    public $companyName;

    /**
     * @description 共享员工UserID列表
     * @var array
     */
    public $shareUserIds;

    /**
     * @description 手机号
     * @var string
     */
    public $mobile;

    /**
     * @description 外部联系人UserID
     * @var string
     */
    public $userid;

    /**
     * @description 邮箱
     * @var string
     */
    public $email;

}
