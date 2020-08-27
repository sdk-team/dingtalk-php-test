<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Update_orderOapiAppstoreOrdersSpecial_canalResponseBody;

class Update_orderOapiAppstoreOrdersSpecial_canalResponse extends Model {
    public function validate() {
        Model::validateRequired('headers', $this->headers, true);
        Model::validateRequired('body', $this->body, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Update_orderOapiAppstoreOrdersSpecial_canalResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        if(isset($map['body'])){
            $model->body = Update_orderOapiAppstoreOrdersSpecial_canalResponseBody::fromMap($map['body']);
        }
        return $model;
    }
    /**
     * @var array
     */
    public $headers;

    /**
     * @var Update_orderOapiAppstoreOrdersSpecial_canalResponseBody
     */
    public $body;

}
