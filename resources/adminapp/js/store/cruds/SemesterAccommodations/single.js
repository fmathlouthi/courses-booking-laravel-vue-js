function initialState() {
    return {
        entry: {
            id: null,
            name: '',
            description: '',
            city_id: null,
            price: 0,
            features: [],
            photos: [],
            featured_image: [],
            created_at: '',
            updated_at: '',
            deleted_at: '',
            owner_id: null
        },
        lists: {
            city: [],
            features: [],
            owner: []
        },
        loading: false
    }
}

const route = 'semester-accommodations'

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
    setDescription({ commit }, value) {
        commit('setDescription', value)
    },
    setCity({ commit }, value) {
        commit('setCity', value)
    },
    insertPhotosFile({ commit }, file) {
        commit('insertPhotosFile', file)
    },
    removePhotosFile({ commit }, file) {
        commit('removePhotosFile', file)
    },
    insertFeaturedImageFile({ commit }, file) {
        commit('insertFeaturedImageFile', file)
    },
    removeFeaturedImageFile({ commit }, file) {
        commit('removeFeaturedImageFile', file)
    },
    setFeatures({ commit }, value) {
        commit('setFeatures', value)
    },
    setPrice({ commit }, value) {
        commit('setPrice', value)
    },
    setCreatedAt({ commit }, value) {
        commit('setCreatedAt', value)
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
    setDescription(state, value) {
        state.entry.description = value
    },
    setCity(state, value) {
        state.entry.city_id = value
    },
    setFeatures(state, value) {
        state.entry.features = value
    },
    setPrice(state, value) {
        state.entry.price = value
    },
    setCreatedAt(state, value) {
        state.entry.created_at = value
    },
    insertPhotosFile(state, file) {
        state.entry.photos.push(file)
    },
    removePhotosFile(state, file) {
        state.entry.photos = state.entry.photos.filter(item => {
            return item.id !== file.id
        })
    },
    insertFeaturedImageFile(state, file) {
        state.entry.featured_image.push(file)
    },
    removeFeaturedImageFile(state, file) {
        state.entry.featured_image = state.entry.featured_image.filter(item => {
            return item.id !== file.id
        })
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