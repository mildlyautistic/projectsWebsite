import { mapGetters } from 'vuex'

export const authComputed = { // for login
    ...mapGetters(['currentUser'])
}
