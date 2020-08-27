<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiWorkspaceProjectNoticeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'limitUserids' => 'limit_userids',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->limitUserids) {
            $res['limit_userids'] = $this->limitUserids;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['limit_userids'])){
            if(!empty($map['limit_userids'])){
                $model->limitUserids = $map['limit_userids'];
            }
        }
        return $model;
    }
    /**
     * @description 被发送额度控制的userids
     * @var array
     */
    public $limitUserids;

}
