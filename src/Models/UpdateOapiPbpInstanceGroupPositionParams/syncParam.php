<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupPositionParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupPositionParams\syncParam\addPositionList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupPositionParams\syncParam\deletePositionList;

class syncParam extends Model {
    protected $_name = [
        'addPositionList' => 'add_position_list',
        'punchGroupId' => 'punch_group_id',
        'deletePositionList' => 'delete_position_list',
        'bizInstId' => 'biz_inst_id',
        'bizId' => 'biz_id',
    ];
    public function validate() {
        Model::validateRequired('punchGroupId', $this->punchGroupId, true);
        Model::validateRequired('bizInstId', $this->bizInstId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->addPositionList) {
            $res['add_position_list'] = [];
            if(null !== $this->addPositionList && is_array($this->addPositionList)){
                $n = 0;
                foreach($this->addPositionList as $item){
                    $res['add_position_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->punchGroupId) {
            $res['punch_group_id'] = $this->punchGroupId;
        }
        if (null !== $this->deletePositionList) {
            $res['delete_position_list'] = [];
            if(null !== $this->deletePositionList && is_array($this->deletePositionList)){
                $n = 0;
                foreach($this->deletePositionList as $item){
                    $res['delete_position_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if(isset($map['add_position_list'])){
            if(!empty($map['add_position_list'])){
                $model->addPositionList = [];
                $n = 0;
                foreach($map['add_position_list'] as $item) {
                    $model->addPositionList[$n++] = null !== $item ? addPositionList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['punch_group_id'])){
            $model->punchGroupId = $map['punch_group_id'];
        }
        if(isset($map['delete_position_list'])){
            if(!empty($map['delete_position_list'])){
                $model->deletePositionList = [];
                $n = 0;
                foreach($map['delete_position_list'] as $item) {
                    $model->deletePositionList[$n++] = null !== $item ? deletePositionList::fromMap($item) : $item;
                }
            }
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
     * @description 新增位置列表
     * @var array
     */
    public $addPositionList;

    /**
     * @description 打卡组唯一标识
     * @var string
     */
    public $punchGroupId;

    /**
     * @description 删除位置列表
     * @var array
     */
    public $deletePositionList;

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
