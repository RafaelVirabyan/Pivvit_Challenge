export function authHeader() {
    // return authorization header with basic auth credentials
    let token = localStorage.getItem('userToken');

    return { Authorization: 'Bearer ' + (token ? token : '') };
}