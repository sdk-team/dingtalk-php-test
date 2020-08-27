<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypagingOapiWorkbenchShortcutResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypagingOapiWorkbenchShortcutResponseBody\result\shortcutList;

class result extends Model {
    protected $_name = [
        'shortcutList' => 'shortcut_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->shortcutList) {
            $res['shortcut_list'] = [];
            if(null !== $this->shortcutList && is_array($this->shortcutList)){
                $n = 0;
                foreach($this->shortcutList as $item){
                    $res['shortcut_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['shortcut_list'])){
            if(!empty($map['shortcut_list'])){
                $model->shortcutList = [];
                $n = 0;
                foreach($map['shortcut_list'] as $item) {
                    $model->shortcutList[$n++] = null !== $item ? shortcutList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 企业下指定应用已添加快捷方式列表
     * @var array
     */
    public $shortcutList;

}
