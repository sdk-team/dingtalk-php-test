<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiUserResponseBody\userlist;

class ListOapiUserResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'hasMore' => 'hasMore',
        'userlist' => 'userlist',
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
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->userlist) {
            $res['userlist'] = [];
            if(null !== $this->userlist && is_array($this->userlist)){
                $n = 0;
                foreach($this->userlist as $item){
                    $res['userlist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiUserResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['hasMore'])){
            $model->hasMore = $map['hasMore'];
        }
        if(isset($map['userlist'])){
            if(!empty($map['userlist'])){
                $model->userlist = [];
                $n = 0;
                foreach($map['userlist'] as $item) {
                    $model->userlist[$n++] = null !== $item ? userlist::fromMap($item) : $item;
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
     * @description hasMore
     * @var bool
     */
    public $hasMore;

    /**
     * @description userlist
     * @var array
     */
    public $userlist;

}
