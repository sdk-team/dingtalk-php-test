<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_adminOapiUserResponseBody\adminList;

class Get_adminOapiUserResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'adminList' => 'admin_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->adminList) {
            $res['admin_list'] = [];
            if(null !== $this->adminList && is_array($this->adminList)){
                $n = 0;
                foreach($this->adminList as $item){
                    $res['admin_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_adminOapiUserResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['admin_list'])){
            if(!empty($map['admin_list'])){
                $model->adminList = [];
                $n = 0;
                foreach($map['admin_list'] as $item) {
                    $model->adminList[$n++] = null !== $item ? adminList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description admin_list
     * @var array
     */
    public $adminList;

}
