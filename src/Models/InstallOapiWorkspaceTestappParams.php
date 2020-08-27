<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InstallOapiWorkspaceTestappParams\installTestapp;

class InstallOapiWorkspaceTestappParams extends Model {
    protected $_name = [
        'installTestapp' => 'install_testapp',
    ];
    public function validate() {
        Model::validateRequired('installTestapp', $this->installTestapp, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->installTestapp) {
            $res['install_testapp'] = null !== $this->installTestapp ? $this->installTestapp->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return InstallOapiWorkspaceTestappParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['install_testapp'])){
            $model->installTestapp = installTestapp::fromMap($map['install_testapp']);
        }
        return $model;
    }
    /**
     * @description 为isv组织下的圈子安装测试应用
     * @var installTestapp
     */
    public $installTestapp;

}
