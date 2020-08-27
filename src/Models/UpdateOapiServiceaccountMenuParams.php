<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiServiceaccountMenuParams\menu;

class UpdateOapiServiceaccountMenuParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
        'menu' => 'menu',
    ];
    public function validate() {
        Model::validateRequired('unionid', $this->unionid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->menu) {
            $res['menu'] = null !== $this->menu ? $this->menu->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiServiceaccountMenuParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['menu'])){
            $model->menu = menu::fromMap($map['menu']);
        }
        return $model;
    }
    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

    /**
     * @description 菜单
     * @var menu
     */
    public $menu;

}
