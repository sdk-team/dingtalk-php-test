<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceProjectMemberParams\members;

class AddOapiWorkspaceProjectMemberParams extends Model {
    protected $_name = [
        'members' => 'members',
    ];
    public function validate() {
        Model::validateRequired('members', $this->members, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->members) {
            $res['members'] = [];
            if(null !== $this->members && is_array($this->members)){
                $n = 0;
                foreach($this->members as $item){
                    $res['members'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiWorkspaceProjectMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['members'])){
            if(!empty($map['members'])){
                $model->members = [];
                $n = 0;
                foreach($map['members'] as $item) {
                    $model->members[$n++] = null !== $item ? members::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 添加成员 最多20个
     * @var array
     */
    public $members;

}
