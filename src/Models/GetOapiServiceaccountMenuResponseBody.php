<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiServiceaccountMenuResponseBody\menu;

class GetOapiServiceaccountMenuResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'menu' => 'menu',
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
        if (null !== $this->menu) {
            $res['menu'] = null !== $this->menu ? $this->menu->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiServiceaccountMenuResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['menu'])){
            $model->menu = menu::fromMap($map['menu']);
        }
        return $model;
    }
    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 菜单
     * @var menu
     */
    public $menu;

}
