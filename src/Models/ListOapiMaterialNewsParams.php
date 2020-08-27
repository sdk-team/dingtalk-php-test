<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiMaterialNewsParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
        'pageStart' => 'page_start',
        'pageSize' => 'page_size',
    ];
    public function validate() {
        Model::validateRequired('unionid', $this->unionid, true);
        Model::validateMaximum('pageSize', $this->pageSize, 20);
        Model::validateMinimum('pageSize', $this->pageSize, 1);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->pageStart) {
            $res['page_start'] = $this->pageStart;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiMaterialNewsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['page_start'])){
            $model->pageStart = $map['page_start'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        return $model;
    }
    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

    /**
     * @description 页码，第几页，从1开始算
     * @var int
     */
    public $pageStart;

    /**
     * @description 每页条数
     * @var int
     */
    public $pageSize;

}
