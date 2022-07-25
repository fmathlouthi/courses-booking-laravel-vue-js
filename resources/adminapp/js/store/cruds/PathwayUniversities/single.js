function initialState() {
    return {
        entry: {
            id: null,
            name: '',
            facebook_link: '',
            instagram_link: '',
            twitter_link: '',
            city_id: null,
            description: '',
            pathbrochure: [],
            featured_image: [],
            photos: [],
            features: [],
            created_at: '',
            updated_at: '',
            deleted_at: '',
            owner_id: null
        },
        lists: {
            city: [],
            owner: [],
            features: [],
        },
        loading: false
    }
}

const route = 'pathway-universities'

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
    setFacebookLink({ commit }, value) {
        commit('setFacebookLink', value)
    },
    setInstagramLink({ commit }, value) {
        commit('setInstagramLink', value)
    },
    setCity({ commit }, value) {
        commit('setCity', value)
    },
    setTwitterLink({ commit }, value) {
        commit('setTwitterLink', value)
    },
    setDescription({ commit }, value) {
        commit('setDescription', value)
    },
    setFeatures({ commit }, value) {
        commit('setFeatures', value)
    },
    insertPathbrochureFile({ commit }, file) {
        commit('insertPathbrochureFile', file)
    },
    removePathbrochureFile({ commit }, file) {
        commit('removePathbrochureFile', file)
    },
    insertFeaturedImageFile({ commit }, file) {
        commit('insertFeaturedImageFile', file)
    },
    removeFeaturedImageFile({ commit }, file) {
        commit('removeFeaturedImageFile', file)
    },
    insertPhotosFile({ commit }, file) {
        commit('insertPhotosFile', file)
    },
    removePhotosFile({ commit }, file) {
        commit('removePhotosFile', file)
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
    setFacebookLink(state, value) {
        state.entry.facebook_link = value
    },
    setInstagramLink(state, value) {
        state.entry.instagram_link = value
    },
    setTwitterLink(state, value) {
        state.entry.twitter_link = value
    },
    setCity(state, value) {
        state.entry.city_id = value
    },
    setDescription(state, value) {
        state.entry.description = value
    },
    setFeatures(state, value) {
        state.entry.features = value
    },
    insertPathbrochureFile(state, file) {
        state.entry.pathbrochure.push(file)
    },
    removePathbrochureFile(state, file) {
        state.entry.pathbrochure = state.entry.pathbrochure.filter(item => {
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
    insertPhotosFile(state, file) {
        state.entry.photos.push(file)
    },
    removePhotosFile(state, file) {
        state.entry.photos = state.entry.photos.filter(item => {
            return item.id !== file.id
        })
    },
    setCreatedAt(state, value) {
        state.entry.created_at = value
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