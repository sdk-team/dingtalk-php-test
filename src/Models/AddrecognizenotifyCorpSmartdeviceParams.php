<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddrecognizenotifyCorpSmartdeviceParams\notifyVo;

class AddrecognizenotifyCorpSmartdeviceParams extends Model {
    protected $_name = [
        'notifyVo' => 'notify_vo',
    ];
    public function validate() {
        Model::validateRequired('notifyVo', $this->notifyVo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->notifyVo) {
            $res['notify_vo'] = null !== $this->notifyVo ? $this->notifyVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddrecognizenotifyCorpSmartdeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['notify_vo'])){
            $model->notifyVo = notifyVo::fromMap($map['notify_vo']);
        }
        return $model;
    }
    /**
     * @description 通知数据
     * @var notifyVo
     */
    public $notifyVo;

}
