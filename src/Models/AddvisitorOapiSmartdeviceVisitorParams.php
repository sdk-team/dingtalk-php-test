<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddvisitorOapiSmartdeviceVisitorParams\visitorVo;

class AddvisitorOapiSmartdeviceVisitorParams extends Model {
    protected $_name = [
        'visitorVo' => 'visitor_vo',
    ];
    public function validate() {
        Model::validateRequired('visitorVo', $this->visitorVo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->visitorVo) {
            $res['visitor_vo'] = null !== $this->visitorVo ? $this->visitorVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddvisitorOapiSmartdeviceVisitorParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['visitor_vo'])){
            $model->visitorVo = visitorVo::fromMap($map['visitor_vo']);
        }
        return $model;
    }
    /**
     * @description 访客预约模型
     * @var visitorVo
     */
    public $visitorVo;

}
