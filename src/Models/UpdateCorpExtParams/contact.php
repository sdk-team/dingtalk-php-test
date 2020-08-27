<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateCorpExtParams;

use AlibabaCloud\Tea\Model;

class contact extends Model {
    protected $_name = [
        'title' => 'title',
        'shareDeptIds' => 'share_dept_ids',
        'labelIds' => 'label_ids',
        'remark' => 'remark',
        'address' => 'address',
        'userId' => 'user_id',
        'name' => 'name',
        'followerUserid' => 'follower_userid',
        'companyName' => 'company_name',
        'shareUserids' => 'share_userids',
    ];
    public function validate() {
        Model::validateRequired('labelIds', $this->labelIds, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('followerUserid', $this->followerUserid, true);
    }
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
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->followerUserid) {
            $res['follower_userid'] = $this->followerUserid;
        }
        if (null !== $this->companyName) {
            $res['company_name'] = $this->companyName;
        }
        if (null !== $this->shareUserids) {
            $res['share_userids'] = $this->shareUserids;
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
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['follower_userid'])){
            $model->followerUserid = $map['follower_userid'];
        }
        if(isset($map['company_name'])){
            $model->companyName = $map['company_name'];
        }
        if(isset($map['share_userids'])){
            if(!empty($map['share_userids'])){
                $model->shareUserids = $map['share_userids'];
            }
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
    public $shareDeptIds;

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
     * @description 该外部联系人的userId
     * @var string
     */
    public $userId;

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
     * @description 企业名
     * @var string
     */
    public $companyName;

    /**
     * @description 共享给的员工userId列表
     * @var array
     */
    public $shareUserids;

}
