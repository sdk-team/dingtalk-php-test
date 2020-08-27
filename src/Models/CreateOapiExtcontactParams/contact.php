<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiExtcontactParams;

use AlibabaCloud\Tea\Model;

class contact extends Model {
    protected $_name = [
        'title' => 'title',
        'labelIds' => 'label_ids',
        'shareDeptIds' => 'share_dept_ids',
        'address' => 'address',
        'remark' => 'remark',
        'followerUserId' => 'follower_user_id',
        'name' => 'name',
        'stateCode' => 'state_code',
        'companyName' => 'company_name',
        'shareUserIds' => 'share_user_ids',
        'mobile' => 'mobile',
    ];
    public function validate() {
        Model::validateRequired('labelIds', $this->labelIds, true);
        Model::validateRequired('followerUserId', $this->followerUserId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('stateCode', $this->stateCode, true);
        Model::validateRequired('mobile', $this->mobile, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->labelIds) {
            $res['label_ids'] = $this->labelIds;
        }
        if (null !== $this->shareDeptIds) {
            $res['share_dept_ids'] = $this->shareDeptIds;
        }
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->followerUserId) {
            $res['follower_user_id'] = $this->followerUserId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        return $res;
    }
    /**
     * @param array $map
     * @return contact
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['label_ids'])){
            if(!empty($map['label_ids'])){
                $model->labelIds = $map['label_ids'];
            }
        }
        if(isset($map['share_dept_ids'])){
            if(!empty($map['share_dept_ids'])){
                $model->shareDeptIds = $map['share_dept_ids'];
            }
        }
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['follower_user_id'])){
            $model->followerUserId = $map['follower_user_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
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
        return $model;
    }
    /**
     * @description 职位
     * @var string
     */
    public $title;

    /**
     * @description 标签列表
     * @var array
     */
    public $labelIds;

    /**
     * @description 共享给的部门ID
     * @var array
     */
    public $shareDeptIds;

    /**
     * @description 地址
     * @var string
     */
    public $address;

    /**
     * @description 备注
     * @var string
     */
    public $remark;

    /**
     * @description 负责人userId
     * @var string
     */
    public $followerUserId;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 手机号国家码
     * @var string
     */
    public $stateCode;

    /**
     * @description 企业名
     * @var string
     */
    public $companyName;

    /**
     * @description 共享给的员工userId列表
     * @var array
     */
    public $shareUserIds;

    /**
     * @description 手机号
     * @var string
     */
    public $mobile;

}
