/**
 * @api {post} /login 用户登录
 * @apiName LoginUser
 * @apiGroup Auth
 *
 * @apiParam {String} email 用户的邮箱地址.
 * @apiParam {String} password 用户的密码.
 *
 * @apiSuccess {String} token JWT 令牌.
 * @apiSuccess {String} message 登录成功信息.
 *
 * @apiError (错误 400) BadRequest 请求参数错误.
 * @apiError (错误 401) Unauthorized 用户名或密码错误.
 */
function loginUser(Request $request) {
    // 登录逻辑
}