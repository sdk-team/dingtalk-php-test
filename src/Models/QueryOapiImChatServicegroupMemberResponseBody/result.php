<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiImChatServicegroupMemberResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiImChatServicegroupMemberResponseBody\result\members;

class result extends Model {
    protected $_name = [
        'members' => 'members',
        'totalCount' => 'total_count',
    ];
    public function validate() {}
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
        if (null !== $this->totalCount) {
            $res['total_count'] = $this->totalCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
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
        if(isset($map['total_count'])){
            $model->totalCount = $map['total_count'];
        }
        return $model;
    }
    /**
     * @description 成员列表
     * @var array
     */
    public $members;

    /**
     * @description 成员总数
     * @var int
     */
    public $totalCount;

}
