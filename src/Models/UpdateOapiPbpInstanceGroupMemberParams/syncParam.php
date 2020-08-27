<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupMemberParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupMemberParams\syncParam\deleteMemberList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupMemberParams\syncParam\addMemberList;

class syncParam extends Model {
    protected $_name = [
        'deleteMemberList' => 'delete_member_list',
        'addMemberList' => 'add_member_list',
        'punchGroupId' => 'punch_group_id',
        'bizInstId' => 'biz_inst_id',
        'bizId' => 'biz_id',
    ];
    public function validate() {
        Model::validateRequired('punchGroupId', $this->punchGroupId, true);
        Model::validateRequired('bizInstId', $this->bizInstId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deleteMemberList) {
            $res['delete_member_list'] = [];
            if(null !== $this->deleteMemberList && is_array($this->deleteMemberList)){
                $n = 0;
                foreach($this->deleteMemberList as $item){
                    $res['delete_member_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->addMemberList) {
            $res['add_member_list'] = [];
            if(null !== $this->addMemberList && is_array($this->addMemberList)){
                $n = 0;
                foreach($this->addMemberList as $item){
                    $res['add_member_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->punchGroupId) {
            $res['punch_group_id'] = $this->punchGroupId;
        }
        if (null !== $this->bizInstId) {
            $res['biz_inst_id'] = $this->bizInstId;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return syncParam
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['delete_member_list'])){
            if(!empty($map['delete_member_list'])){
                $model->deleteMemberList = [];
                $n = 0;
                foreach($map['delete_member_list'] as $item) {
                    $model->deleteMemberList[$n++] = null !== $item ? deleteMemberList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['add_member_list'])){
            if(!empty($map['add_member_list'])){
                $model->addMemberList = [];
                $n = 0;
                foreach($map['add_member_list'] as $item) {
                    $model->addMemberList[$n++] = null !== $item ? addMemberList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['punch_group_id'])){
            $model->punchGroupId = $map['punch_group_id'];
        }
        if(isset($map['biz_inst_id'])){
            $model->bizInstId = $map['biz_inst_id'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        return $model;
    }
    /**
     * @description 删除成员列表
     * @var array
     */
    public $deleteMemberList;

    /**
     * @description 新增成员列表
     * @var array
     */
    public $addMemberList;

    /**
     * @description 打卡组唯一标识
     * @var string
     */
    public $punchGroupId;

    /**
     * @description 业务实例唯一标识
     * @var string
     */
    public $bizInstId;

    /**
     * @description 业务唯一标识
     * @var string
     */
    public $bizId;

}
