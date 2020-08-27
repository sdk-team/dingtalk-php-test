<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiSmartdeviceFacegroupMemberParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'addUserIds' => 'add_user_ids',
        'delUserIds' => 'del_user_ids',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateMaxLength('bizId', $this->bizId, 23);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->addUserIds) {
            $res['add_user_ids'] = $this->addUserIds;
        }
        if (null !== $this->delUserIds) {
            $res['del_user_ids'] = $this->delUserIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiSmartdeviceFacegroupMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['add_user_ids'])){
            if(!empty($map['add_user_ids'])){
                $model->addUserIds = $map['add_user_ids'];
            }
        }
        if(isset($map['del_user_ids'])){
            if(!empty($map['del_user_ids'])){
                $model->delUserIds = $map['del_user_ids'];
            }
        }
        return $model;
    }
    /**
     * @description 业务id
     * @var string
     */
    public $bizId;

    /**
     * @description 需新增的用户id列表
     * @var array
     */
    public $addUserIds;

    /**
     * @description 需移除的用户id列表
     * @var array
     */
    public $delUserIds;

}
