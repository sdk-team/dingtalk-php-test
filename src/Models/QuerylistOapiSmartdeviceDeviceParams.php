<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerylistOapiSmartdeviceDeviceParams\pageQueryVo;

class QuerylistOapiSmartdeviceDeviceParams extends Model {
    protected $_name = [
        'pageQueryVo' => 'page_query_vo',
    ];
    public function validate() {
        Model::validateRequired('pageQueryVo', $this->pageQueryVo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pageQueryVo) {
            $res['page_query_vo'] = null !== $this->pageQueryVo ? $this->pageQueryVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QuerylistOapiSmartdeviceDeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_query_vo'])){
            $model->pageQueryVo = pageQueryVo::fromMap($map['page_query_vo']);
        }
        return $model;
    }
    /**
     * @description 列表查询对象
     * @var pageQueryVo
     */
    public $pageQueryVo;

}
