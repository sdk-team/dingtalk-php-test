<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiAlitripBtripReimbursementAppstatusParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'corpid' => 'corpid',
        'isvCode' => 'isv_code',
        'version' => 'version',
        'installed' => 'installed',
    ];
    public function validate() {
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validateRequired('isvCode', $this->isvCode, true);
        Model::validateRequired('installed', $this->installed, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->isvCode) {
            $res['isv_code'] = $this->isvCode;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->installed) {
            $res['installed'] = $this->installed;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['isv_code'])){
            $model->isvCode = $map['isv_code'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        if(isset($map['installed'])){
            $model->installed = $map['installed'];
        }
        return $model;
    }
    /**
     * @description corp id
     * @var string
     */
    public $corpid;

    /**
     * @description isv 代码
     * @var string
     */
    public $isvCode;

    /**
     * @description app版本
     * @var string
     */
    public $version;

    /**
     * @description 是否已经安装（app是否正常提供服务）
     * @var bool
     */
    public $installed;

}
