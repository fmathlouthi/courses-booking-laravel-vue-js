function initialState() {
    return {
        entry: {
            id: null,
            order_number: '',
            client_id: null,
            sub_total: '0.000',
            coupon_id: null,
            total_amount: '0.000',
            payment_method: 'cod',
            payment_status: 'unpaid',
            status: 'new',
            first_name: '',
            last_name: '',
            email: '',
            phone: '',
            country: '',
            post_code: '',
            address_1: '',
            address_2: '',
            created_at: '',
            course_id: null,
            extra_id: null,
            accommodation_id: null,
            start_date: '',
            updated_at: '',
            deleted_at: '',
            owner_id: null
        },
        lists: {
            client: [],
            coupon: [],
            payment_method: [],
            payment_status: [],
            status: [],
            course: [],
            extra: [],
            accommodation: [],
            owner: []
        },
        loading: false
    }
}

const route = 'course-orders'

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
    setOrderNumber({ commit }, value) {
        commit('setOrderNumber', value)
    },
    setClient({ commit }, value) {
        commit('setClient', value)
    },
    setSubTotal({ commit }, value) {
        commit('setSubTotal', value)
    },
    setCoupon({ commit }, value) {
        commit('setCoupon', value)
    },
    setTotalAmount({ commit }, value) {
        commit('setTotalAmount', value)
    },
    setPaymentMethod({ commit }, value) {
        commit('setPaymentMethod', value)
    },
    setPaymentStatus({ commit }, value) {
        commit('setPaymentStatus', value)
    },
    setStatus({ commit }, value) {
        commit('setStatus', value)
    },
    setFirstName({ commit }, value) {
        commit('setFirstName', value)
    },
    setLastName({ commit }, value) {
        commit('setLastName', value)
    },
    setEmail({ commit }, value) {
        commit('setEmail', value)
    },
    setPhone({ commit }, value) {
        commit('setPhone', value)
    },
    setCountry({ commit }, value) {
        commit('setCountry', value)
    },
    setPostCode({ commit }, value) {
        commit('setPostCode', value)
    },
    setAddress1({ commit }, value) {
        commit('setAddress1', value)
    },
    setAddress2({ commit }, value) {
        commit('setAddress2', value)
    },
    setCreatedAt({ commit }, value) {
        commit('setCreatedAt', value)
    },
    setCourse({ commit }, value) {
        commit('setCourse', value)
    },
    setExtra({ commit }, value) {
        commit('setExtra', value)
    },
    setAccommodation({ commit }, value) {
        commit('setAccommodation', value)
    },
    setStartDate({ commit }, value) {
        commit('setStartDate', value)
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
    setOrderNumber(state, value) {
        state.entry.order_number = value
    },
    setClient(state, value) {
        state.entry.client_id = value
    },
    setSubTotal(state, value) {
        state.entry.sub_total = value
    },
    setCoupon(state, value) {
        state.entry.coupon_id = value
    },
    setTotalAmount(state, value) {
        state.entry.total_amount = value
    },
    setPaymentMethod(state, value) {
        state.entry.payment_method = value
    },
    setPaymentStatus(state, value) {
        state.entry.payment_status = value
    },
    setStatus(state, value) {
        state.entry.status = value
    },
    setFirstName(state, value) {
        state.entry.first_name = value
    },
    setLastName(state, value) {
        state.entry.last_name = value
    },
    setEmail(state, value) {
        state.entry.email = value
    },
    setPhone(state, value) {
        state.entry.phone = value
    },
    setCountry(state, value) {
        state.entry.country = value
    },
    setPostCode(state, value) {
        state.entry.post_code = value
    },
    setAddress1(state, value) {
        state.entry.address_1 = value
    },
    setAddress2(state, value) {
        state.entry.address_2 = value
    },
    setCreatedAt(state, value) {
        state.entry.created_at = value
    },
    setCourse(state, value) {
        state.entry.course_id = value
    },
    setExtra(state, value) {
        state.entry.extra_id = value
    },
    setAccommodation(state, value) {
        state.entry.accommodation_id = value
    },
    setStartDate(state, value) {
        state.entry.start_date = value
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