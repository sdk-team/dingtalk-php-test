<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Reauth_corpOapiServiceParams extends Model {
    protected $_name = [
        'appId' => 'app_id',
        'corpidList' => 'corpid_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        if (null !== $this->corpidList) {
            $res['corpid_list'] = $this->corpidList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Reauth_corpOapiServiceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        if(isset($map['corpid_list'])){
            if(!empty($map['corpid_list'])){
                $model->corpidList = $map['corpid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 套件下的微应用ID
     * @var string
     */
    public $appId;

    /**
     * @description 未激活的corpid列表
     * @var array
     */
    public $corpidList;

}
