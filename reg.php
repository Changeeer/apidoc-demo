/**
 * @api {post} /register 用户注册
 * @apiName RegisterUser
 * @apiGroup Auth
 *
 * @apiParam {String} name 用户姓名.
 * @apiParam {String} email 用户的邮箱地址.
 * @apiParam {String} password 用户的密码.
 *
 * @apiSuccess {String} message 注册成功信息.
 *
 * @apiError (错误 400) BadRequest 请求参数错误.
 * @apiError (错误 409) Conflict 邮箱已被注册.
 */
function registerUser(Request $request) {
    // 注册逻辑
}