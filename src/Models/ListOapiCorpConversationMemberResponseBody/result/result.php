<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCorpConversationMemberResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCorpConversationMemberResponseBody\result\result\memberList;

class result extends Model {
    protected $_name = [
        'memberList' => 'member_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->memberList) {
            $res['member_list'] = [];
            if(null !== $this->memberList && is_array($this->memberList)){
                $n = 0;
                foreach($this->memberList as $item){
                    $res['member_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['member_list'])){
            if(!empty($map['member_list'])){
                $model->memberList = [];
                $n = 0;
                foreach($map['member_list'] as $item) {
                    $model->memberList[$n++] = null !== $item ? memberList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 成员信息
     * @var array
     */
    public $memberList;

}
