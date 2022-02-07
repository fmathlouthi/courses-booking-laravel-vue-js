function initialState() {
    return {
        entry: {
            id: null,
            name: '',
            created_at: '',
            code: '',
            type: null,
            value: '0.000',
            count: '',
            expired_at: '',
            status: 'inactive',
            updated_at: '',
            deleted_at: '',
            owner_id: null
        },
        lists: {
            type: [],
            status: [],
            owner: []
        },
        loading: false
    }
}

const route = 'coupons'

const getters = {
    entry: state => state.entry,
    lists: state => state.lists,
    loading: state => state.loading
}

const actions = {
    storeData({ commit, state, dispatch }) {
        commit('setLoading', true)
        dispatch('Alert/resetState', null, { root: true })

        return new Promise((resolve, reject) => {
            let params = objectToFormData(state.entry, {
                indices: true,
                booleansAsIntegers: true
            })
            axios
                .post(route, params)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    let message = error.response.data.message || error.message
                    let errors = error.response.data.errors

                    dispatch(
                        'Alert/setAlert', { message: message, errors: errors, color: 'danger' }, { root: true }
                    )

                    reject(error)
                })
                .finally(() => {
                    commit('setLoading', false)
                })
        })
    },
    updateData({ commit, state, dispatch }) {
        commit('setLoading', true)
        dispatch('Alert/resetState', null, { root: true })

        return new Promise((resolve, reject) => {
            let params = objectToFormData(state.entry, {
                indices: true,
                booleansAsIntegers: true
            })
            params.set('_method', 'PUT')
            axios
                .post(`${route}/${state.entry.id}`, params)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    let message = error.response.data.message || error.message
                    let errors = error.response.data.errors

                    dispatch(
                        'Alert/setAlert', { message: message, errors: errors, color: 'danger' }, { root: true }
                    )

                    reject(error)
                })
                .finally(() => {
                    commit('setLoading', false)
                })
        })
    },
    setName({ commit }, value) {
        commit('setName', value)
    },
    setCreatedAt({ commit }, value) {
        commit('setCreatedAt', value)
    },
    setCode({ commit }, value) {
        commit('setCode', value)
    },
    setType({ commit }, value) {
        commit('setType', value)
    },
    setValue({ commit }, value) {
        commit('setValue', value)
    },
    setCount({ commit }, value) {
        commit('setCount', value)
    },
    setExpiredAt({ commit }, value) {
        commit('setExpiredAt', value)
    },
    setStatus({ commit }, value) {
        commit('setStatus', value)
    },
    setUpdatedAt({ commit }, value) {
        commit('setUpdatedAt', value)
    },
    setDeletedAt({ commit }, value) {
        commit('setDeletedAt', value)
    },
    setOwner({ commit }, value) {
        commit('setOwner', value)
    },
    fetchCreateData({ commit }) {
        axios.get(`${route}/create`).then(response => {
            commit('setLists', response.data.meta)
        })
    },
    fetchEditData({ commit, dispatch }, id) {
        axios.get(`${route}/${id}/edit`).then(response => {
            commit('setEntry', response.data.data)
            commit('setLists', response.data.meta)
        })
    },
    fetchShowData({ commit, dispatch }, id) {
        axios.get(`${route}/${id}`).then(response => {
            commit('setEntry', response.data.data)
        })
    },
    resetState({ commit }) {
        commit('resetState')
    }
}

const mutations = {
    setEntry(state, entry) {
        state.entry = entry
    },
    setName(state, value) {
        state.entry.name = value
    },
    setCreatedAt(state, value) {
        state.entry.created_at = value
    },
    setCode(state, value) {
        state.entry.code = value
    },
    setType(state, value) {
        state.entry.type = value
    },
    setValue(state, value) {
        state.entry.value = value
    },
    setCount(state, value) {
        state.entry.count = value
    },
    setExpiredAt(state, value) {
        state.entry.expired_at = value
    },
    setStatus(state, value) {
        state.entry.status = value
    },
    setUpdatedAt(state, value) {
        state.entry.updated_at = value
    },
    setDeletedAt(state, value) {
        state.entry.deleted_at = value
    },
    setOwner(state, value) {
        state.entry.owner_id = value
    },
    setLists(state, lists) {
        state.lists = lists
    },
    setLoading(state, loading) {
        state.loading = loading
    },
    resetState(state) {
        state = Object.assign(state, initialState())
    }
}

export default {
    namespaced: true,
    state: initialState,
    getters,
    actions,
    mutations
}