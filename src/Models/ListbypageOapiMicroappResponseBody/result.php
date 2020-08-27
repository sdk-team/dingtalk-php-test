<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypageOapiMicroappResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'scopes' => 'scopes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->scopes) {
            $res['scopes'] = $this->scopes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['scopes'])){
            if(!empty($map['scopes'])){
                $model->scopes = $map['scopes'];
            }
        }
        return $model;
    }
    /**
     * @description hasMore
     * @var bool
     */
    public $hasMore;

    /**
     * @description list
     * @var array
     */
    public $scopes;

}
