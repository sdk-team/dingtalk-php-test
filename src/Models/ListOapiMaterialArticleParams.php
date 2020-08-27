<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiMaterialArticleParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
        'pageSize' => 'page_size',
        'pageStart' => 'page_start',
    ];
    public function validate() {
        Model::validateRequired('unionid', $this->unionid, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageStart', $this->pageStart, true);
        Model::validateMaximum('pageSize', $this->pageSize, 20);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageStart) {
            $res['page_start'] = $this->pageStart;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiMaterialArticleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page_start'])){
            $model->pageStart = $map['page_start'];
        }
        return $model;
    }
    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

    /**
     * @description 每页条数
     * @var int
     */
    public $pageSize;

    /**
     * @description 页码
     * @var int
     */
    public $pageStart;

}
