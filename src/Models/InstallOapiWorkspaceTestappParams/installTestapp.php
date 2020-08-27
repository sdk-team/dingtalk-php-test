<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InstallOapiWorkspaceTestappParams;

use AlibabaCloud\Tea\Model;

class installTestapp extends Model {
    protected $_name = [
        'circleCorpId' => 'circle_corp_id',
    ];
    public function validate() {
        Model::validateRequired('circleCorpId', $this->circleCorpId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->circleCorpId) {
            $res['circle_corp_id'] = $this->circleCorpId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return installTestapp
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['circle_corp_id'])){
            $model->circleCorpId = $map['circle_corp_id'];
        }
        return $model;
    }
    /**
     * @description 圈子组织的corpId，圈子归属组织必须是isv组织
     * @var string
     */
    public $circleCorpId;

}
