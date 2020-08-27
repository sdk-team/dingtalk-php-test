<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateCorpExtParams\contact;

class UpdateCorpExtParams extends Model {
    protected $_name = [
        'contact' => 'contact',
    ];
    public function validate() {
        Model::validateRequired('contact', $this->contact, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->contact) {
            $res['contact'] = null !== $this->contact ? $this->contact->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateCorpExtParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['contact'])){
            $model->contact = contact::fromMap($map['contact']);
        }
        return $model;
    }
    /**
     * @description 外部联系人信息
     * @var contact
     */
    public $contact;

}
