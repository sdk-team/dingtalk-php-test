<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduAlumniResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        return $model;
    }
    /**
     * @description 校友会id
     * @var string
     */
    public $corpId;

}
