<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddCorpExtParams;

use AlibabaCloud\Tea\Model;

class contact extends Model {
    protected $_name = [
        'title' => 'title',
        'shareDeptids' => 'share_deptids',
        'labelIds' => 'label_ids',
        'remark' => 'remark',
        'address' => 'address',
        'name' => 'name',
        'followerUserid' => 'follower_userid',
        'stateCode' => 'state_code',
        'companyName' => 'company_name',
        'shareUserids' => 'share_userids',
        'mobile' => 'mobile',
    ];
    public function validate() {
        Model::validateRequired('labelIds', $this->labelIds, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('followerUserid', $this->followerUserid, true);
        Model::validateRequired('stateCode', $this->stateCode, true);
        Model::validateRequired('mobile', $this->mobile, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->shareDeptids) {
            $res['share_deptids'] = $this->shareDeptids;
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
        if (null !== $this->followerUserid) {
            $res['follower_userid'] = $this->followerUserid;
        }
        if (null !== $this->stateCode) {
            $res['state_code'] = $this->stateCode;
        }
        if (null !== $this->companyName) {
            $res['company_name'] = $this->companyName;
        }
        if (null !== $this->shareUserids) {
            $res['share_userids'] = $this->shareUserids;
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
        if(isset($map['share_deptids'])){
            if(!empty($map['share_deptids'])){
                $model->shareDeptids = $map['share_deptids'];
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
        if(isset($map['follower_userid'])){
            $model->followerUserid = $map['follower_userid'];
        }
        if(isset($map['state_code'])){
            $model->stateCode = $map['state_code'];
        }
        if(isset($map['company_name'])){
            $model->companyName = $map['company_name'];
        }
        if(isset($map['share_userids'])){
            if(!empty($map['share_userids'])){
                $model->shareUserids = $map['share_userids'];
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
     * @description 共享给的部门ID
     * @var array
     */
    public $shareDeptids;

    /**
     * @description 标签列表
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
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 负责人userId
     * @var string
     */
    public $followerUserid;

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
    public $shareUserids;

    /**
     * @description 手机号
     * @var string
     */
    public $mobile;

}
