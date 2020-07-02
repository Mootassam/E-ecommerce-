class LocaleStorage {
    sotreUser(user) {
        localStorage.setItem('user', user)
    }
    StoreToken(token) {
        localStorage.setItem('token', token)
    }
    store(user, token) {
        this.StoreToken(token);
        this.sotreUser(user);
    }
    clear() {
        localStorage.removeItem('token');
        localStorage.removeItem('user');
    }
    getToken() {
        localStorage.getItem('token');
    }
    getUser() {
        localStorage.getItem('user')
    }


}
export default LocaleStorage = new LocaleStorage();