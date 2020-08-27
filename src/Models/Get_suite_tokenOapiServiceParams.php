<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_suite_tokenOapiServiceParams extends Model {
    protected $_name = [
        'suiteKey' => 'suite_key',
        'suiteSecret' => 'suite_secret',
        'suiteTicket' => 'suite_ticket',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->suiteKey) {
            $res['suite_key'] = $this->suiteKey;
        }
        if (null !== $this->suiteSecret) {
            $res['suite_secret'] = $this->suiteSecret;
        }
        if (null !== $this->suiteTicket) {
            $res['suite_ticket'] = $this->suiteTicket;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_suite_tokenOapiServiceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['suite_key'])){
            $model->suiteKey = $map['suite_key'];
        }
        if(isset($map['suite_secret'])){
            $model->suiteSecret = $map['suite_secret'];
        }
        if(isset($map['suite_ticket'])){
            $model->suiteTicket = $map['suite_ticket'];
        }
        return $model;
    }
    /**
     * @description 套件key，开发者后台创建套件后获取
     * @var string
     */
    public $suiteKey;

    /**
     * @description 套件secret，开发者后台创建套件后获取
     * @var string
     */
    public $suiteSecret;

    /**
     * @description 钉钉推送的ticket
     * @var string
     */
    public $suiteTicket;

}
