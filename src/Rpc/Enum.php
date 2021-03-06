<?php
// +----------------------------------------------------------------------
// | EnumException.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 xiaolin All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaolin <462441355@qq.com> <https://github.com/missxiaolin>
// +----------------------------------------------------------------------
namespace Lin\Swoole\Rpc;

class Enum
{
    // 传输协议状态
    const SUCCESS = 'success';

    // 传输协议数据
    const DATA = 'data';

    // 传输协议错误码
    const ERROR_CODE = 'errorCode';

    // 传输协议错误信息
    const ERROR_MESSAGE = 'errorMessage';

    // 服务名
    const SERVICE = 'service';

    // 方法名
    const METHOD = 'method';

    // 调用参数
    const ARGUMENTS = 'arguments';

    // 超时时间
    const TIMEOUT = 'timeout';
}
