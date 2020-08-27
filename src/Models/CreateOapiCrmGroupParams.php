<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiCrmGroupParams extends Model {
    protected $_name = [
        'contactIdList' => 'contact_id_list',
        'groupOwner' => 'group_owner',
        'customerId' => 'customer_id',
        'colleagueUseridList' => 'colleague_userid_list',
        'customerCorpid' => 'customer_corpid',
    ];
    public function validate() {
        Model::validateRequired('groupOwner', $this->groupOwner, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('customerCorpid', $this->customerCorpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->contactIdList) {
            $res['contact_id_list'] = $this->contactIdList;
        }
        if (null !== $this->groupOwner) {
            $res['group_owner'] = $this->groupOwner;
        }
        if (null !== $this->customerId) {
            $res['customer_id'] = $this->customerId;
        }
        if (null !== $this->colleagueUseridList) {
            $res['colleague_userid_list'] = $this->colleagueUseridList;
        }
        if (null !== $this->customerCorpid) {
            $res['customer_corpid'] = $this->customerCorpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiCrmGroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['contact_id_list'])){
            if(!empty($map['contact_id_list'])){
                $model->contactIdList = $map['contact_id_list'];
            }
        }
        if(isset($map['group_owner'])){
            $model->groupOwner = $map['group_owner'];
        }
        if(isset($map['customer_id'])){
            $model->customerId = $map['customer_id'];
        }
        if(isset($map['colleague_userid_list'])){
            if(!empty($map['colleague_userid_list'])){
                $model->colleagueUseridList = $map['colleague_userid_list'];
            }
        }
        if(isset($map['customer_corpid'])){
            $model->customerCorpid = $map['customer_corpid'];
        }
        return $model;
    }
    /**
     * @description 联系人userId列表
     * @var array
     */
    public $contactIdList;

    /**
     * @description 群主userId
     * @var string
     */
    public $groupOwner;

    /**
     * @description 客户id
     * @var string
     */
    public $customerId;

    /**
     * @description 需要入群的同事userId列表
     * @var array
     */
    public $colleagueUseridList;

    /**
     * @description 客户归属的企业id
     * @var string
     */
    public $customerCorpid;

}
