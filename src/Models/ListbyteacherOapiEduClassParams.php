<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyteacherOapiEduClassParams\filterParam;

class ListbyteacherOapiEduClassParams extends Model {
    protected $_name = [
        'filterParam' => 'filter_param',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->filterParam) {
            $res['filter_param'] = null !== $this->filterParam ? $this->filterParam->toMap() : null;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbyteacherOapiEduClassParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['filter_param'])){
            $model->filterParam = filterParam::fromMap($map['filter_param']);
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 过滤入参
     * @var filterParam
     */
    public $filterParam;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

}
