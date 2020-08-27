<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiTrainingGroupinfoParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'ids' => 'ids',
        'corpId' => 'corp_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->ids) {
            $res['ids'] = $this->ids;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ids'])){
            if(!empty($map['ids'])){
                $model->ids = $map['ids'];
            }
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        return $model;
    }
    /**
     * @description 群id
     * @var array
     */
    public $ids;

    /**
     * @description 组织唯一标识corpid
     * @var string
     */
    public $corpId;

}
