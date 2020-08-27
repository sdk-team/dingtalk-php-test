<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbypagingOapiWorkbenchShortcutParams extends Model {
    protected $_name = [
        'pageSize' => 'page_size',
        'pageIndex' => 'page_index',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
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
     * @return ListbypagingOapiWorkbenchShortcutParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page_index'])){
            $model->pageIndex = $map['page_index'];
        }
        return $model;
    }
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
