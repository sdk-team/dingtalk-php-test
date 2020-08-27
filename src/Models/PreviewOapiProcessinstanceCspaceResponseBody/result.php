<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\PreviewOapiProcessinstanceCspaceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'spaceId' => 'space_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->spaceId) {
            $res['space_id'] = $this->spaceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['space_id'])){
            $model->spaceId = $map['space_id'];
        }
        return $model;
    }
    /**
     * @description spaceId
     * @var int
     */
    public $spaceId;

}
