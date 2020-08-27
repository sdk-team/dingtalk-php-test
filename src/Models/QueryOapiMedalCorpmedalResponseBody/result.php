<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMedalCorpmedalResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMedalCorpmedalResponseBody\result\corpMedalList;

class result extends Model {
    protected $_name = [
        'corpMedalList' => 'corp_medal_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpMedalList) {
            $res['corp_medal_list'] = [];
            if(null !== $this->corpMedalList && is_array($this->corpMedalList)){
                $n = 0;
                foreach($this->corpMedalList as $item){
                    $res['corp_medal_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['corp_medal_list'])){
            if(!empty($map['corp_medal_list'])){
                $model->corpMedalList = [];
                $n = 0;
                foreach($map['corp_medal_list'] as $item) {
                    $model->corpMedalList[$n++] = null !== $item ? corpMedalList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 勋章列表
     * @var array
     */
    public $corpMedalList;

}
