<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryorginfoOapiNewretailResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'orgname' => 'orgname',
        'licensemediaid' => 'licensemediaid',
        'registnum' => 'registnum',
        'unifiedsocialcredit' => 'unifiedsocialcredit',
        'unnameorganizationcoded' => 'unnameorganizationcoded',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->orgname) {
            $res['orgname'] = $this->orgname;
        }
        if (null !== $this->licensemediaid) {
            $res['licensemediaid'] = $this->licensemediaid;
        }
        if (null !== $this->registnum) {
            $res['registnum'] = $this->registnum;
        }
        if (null !== $this->unifiedsocialcredit) {
            $res['unifiedsocialcredit'] = $this->unifiedsocialcredit;
        }
        if (null !== $this->unnameorganizationcoded) {
            $res['unnameorganizationcoded'] = $this->unnameorganizationcoded;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['orgname'])){
            $model->orgname = $map['orgname'];
        }
        if(isset($map['licensemediaid'])){
            $model->licensemediaid = $map['licensemediaid'];
        }
        if(isset($map['registnum'])){
            $model->registnum = $map['registnum'];
        }
        if(isset($map['unifiedsocialcredit'])){
            $model->unifiedsocialcredit = $map['unifiedsocialcredit'];
        }
        if(isset($map['unnameorganizationcoded'])){
            $model->unnameorganizationcoded = $map['unnameorganizationcoded'];
        }
        return $model;
    }
    /**
     * @description orgName
     * @var string
     */
    public $orgname;

    /**
     * @description licenseMediaId
     * @var string
     */
    public $licensemediaid;

    /**
     * @description registNum
     * @var string
     */
    public $registnum;

    /**
     * @description unifiedSocialCredit
     * @var string
     */
    public $unifiedsocialcredit;

    /**
     * @description unnameorganizationCoded
     * @var string
     */
    public $unnameorganizationcoded;

}
