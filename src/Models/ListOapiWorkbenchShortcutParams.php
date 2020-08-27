<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiWorkbenchShortcutParams extends Model {
    protected $_name = [
        'appId' => 'app_id',
        'pageSize' => 'page_size',
        'pageIndex' => 'page_index',
    ];
    public function validate() {
        Model::validateRequired('appId', $this->appId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageIndex) {
            $res['page_index'] = $this->pageIndex;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiWorkbenchShortcutParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page_index'])){
            $model->pageIndex = $map['page_index'];
        }
        return $model;
    }
    /**
     * @description ISV微应用id
     * @var string
     */
    public $appId;

    /**
     * @description 每页记录数
     * @var int
     */
    public $pageSize;

    /**
     * @description 当前页码
     * @var int
     */
    public $pageIndex;

}
