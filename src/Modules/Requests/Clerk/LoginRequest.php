<?php

namespace Shitutech\YlPay\Modules\Requests\Clerk;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class LoginRequest extends BaseRequest
{
    /**
     * @var string 营业员登录账号
     */
    protected $account = '';

    /**
     * @var string 按照 md5(md5(pwd)连接上pwd) 获得的32为小写MD5串
     */
    protected $pwd = '';

    /**
     * @var string 是否更新用户token（更新后旧 token 将立即失效）；更新值为小写 true，否则不更新
     */
    protected $refreshToken = 'false';

    public function getApiPath(): string
    {
        return '/merchant/clerk/login';
    }

    /**
     * @param string $account
     * @return LoginRequest
     */
    public function setAccount(string $account): self
    {
        $this->account = trim($account);

        return $this;
    }

    /**
     * @param string $pwd
     * @return LoginRequest
     */
    public function setPwd(string $pwd): self
    {
        $this->pwd = md5(md5($pwd) . $pwd);

        return $this;
    }

    /**
     * @param bool $refreshToken
     * @return LoginRequest
     */
    public function setRefreshToken(bool $refreshToken): self
    {
        $this->refreshToken = $refreshToken ? 'true' : 'false';

        return $this;
    }
}
