import Token from './Token'
import AppStorage from './AppStorage'
class User {

    login(data) {
        axios.post('/api/auth/login', data)
            .then(res => {
                this.responseAfterLogin(res)
            })
    }
    responseAfterLogin(res) {
        const access_token = res.data.access_token
        const user = res.data.user
        if (Token.isToken(access_token)) {
            AppStorage.store(user, access_token)
            window.location = '/homes'
        }
    }
    hasToken() {

        const storedToken = AppStorage.getToken();
        if (storedToken) {
            return Token.isToken(storedToken) ? true : false
        }
        return false
    }
    loggedIn() {
        return this.hasToken()
    }

}
export default User = new User();
