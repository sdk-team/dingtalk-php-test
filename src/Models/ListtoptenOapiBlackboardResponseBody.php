<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListtoptenOapiBlackboardResponseBody\blackboardList;

class ListtoptenOapiBlackboardResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'blackboardList' => 'blackboard_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->blackboardList) {
            $res['blackboard_list'] = [];
            if(null !== $this->blackboardList && is_array($this->blackboardList)){
                $n = 0;
                foreach($this->blackboardList as $item){
                    $res['blackboard_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListtoptenOapiBlackboardResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['blackboard_list'])){
            if(!empty($map['blackboard_list'])){
                $model->blackboardList = [];
                $n = 0;
                foreach($map['blackboard_list'] as $item) {
                    $model->blackboardList[$n++] = null !== $item ? blackboardList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description result
     * @var array
     */
    public $blackboardList;

}
