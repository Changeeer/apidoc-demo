/**
 * @api {get} /users/:uuid 查询用户信息
 * @apiName GetUser
 * @apiGroup User
 *
 * @apiParam {String} uuid 用户的唯一标识符.
 *
 * @apiSuccess {String} uuid 用户的唯一标识符.
 * @apiSuccess {String} name 用户姓名.
 * @apiSuccess {String} sex 用户性别.
 * @apiSuccess {Number} age 用户年龄.
 * @apiSuccess {String} phone 用户电话.
 * @apiSuccess {String} email 用户邮箱.
 *
 * @apiError (错误 404) NotFound 用户未找到.
 */
function getUser($uuid) {
    // 查询用户逻辑
}

/**
 * @api {get} /users 查询用户列表
 * @apiName GetUsersList
 * @apiGroup User
 *
 * @apiSuccess {Object[]} users 用户列表.
 * @apiSuccess {String} users.uuid 用户的唯一标识符.
 * @apiSuccess {String} users.name 用户姓名.
 * @apiSuccess {String} users.sex 用户性别.
 * @apiSuccess {Number} users.age 用户年龄.
 * @apiSuccess {String} users.phone 用户电话.
 * @apiSuccess {String} users.email 用户邮箱.
 */
function getUsersList() {
    // 查询用户列表逻辑
}

/**
 * @api {post} /users 插入新用户
 * @apiName CreateUser
 * @apiGroup User
 *
 * @apiParam {String} name 用户姓名.
 * @apiParam {String} sex 用户性别.
 * @apiParam {Number} age 用户年龄.
 * @apiParam {String} phone 用户电话.
 * @apiParam {String} email 用户邮箱.
 *
 * @apiSuccess {String} message 插入成功信息.
 *
 * @apiError (错误 400) BadRequest 请求参数错误.
 */
function createUser(Request $request) {
    // 插入用户逻辑
}

/**
 * @api {put} /users/:uuid 更新用户信息
 * @apiName UpdateUser
 * @apiGroup User
 *
 * @apiParam {String} uuid 用户的唯一标识符.
 * @apiParam {String} [name] 用户姓名（可选）.
 * @apiParam {String} [sex] 用户性别（可选）.
 * @apiParam {Number} [age] 用户年龄（可选）.
 * @apiParam {String} [phone] 用户电话（可选）.
 * @apiParam {String} [email] 用户邮箱（可选）.
 *
 * @apiSuccess {String} message 更新成功信息.
 *
 * @apiError (错误 404) NotFound 用户未找到.
 */
function updateUser($uuid, Request $request) {
    // 更新用户逻辑
}

/**
 * @api {delete} /users/:uuid 删除用户
 * @apiName DeleteUser
 * @apiGroup User
 *
 * @apiParam {String} uuid 用户的唯一标识符.
 *
 * @apiSuccess {String} message 删除成功信息.
 *
 * @apiError (错误 404) NotFound 用户未找到.
 */
function deleteUser($uuid) {
    // 删除用户逻辑
}
