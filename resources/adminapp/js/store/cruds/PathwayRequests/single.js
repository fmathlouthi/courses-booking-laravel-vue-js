function initialState() {
    return {
        entry: {
            id: null,
            student_first_name: '',
            student_last_name: '',
            gendre: null,
            nationality: null,
            level_of_study: null,
            email: null,
            phone: '',
            country: '',
            post_code: '',
            state: '',
            city: '',
            address_1: '',
            address_2: '',
            special_needs: '',
            comments: '',
            preferred_intake: '',
            university_degree_id: null,
            university_college: '',
            secondary_school: '',
            english_proficiency: '',
            current_address: '',
            date_of_birth: '',
            subject_id: null,
            university_id: null,
            created_at: '',
            updated_at: '',
            deleted_at: '',
            owner_id: null
        },
        lists: {
            gendre: [],
            nationality: [],
            level_of_study: [],
            university_degree: [],
            subject: [],
            university: [],
            owner: []
        },
        loading: false
    }
}

const route = 'pathway-requests'

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
    setStudentFirstName({ commit }, value) {
        commit('setStudentFirstName', value)
    },
    setStudentLastName({ commit }, value) {
        commit('setStudentLastName', value)
    },
    setGendre({ commit }, value) {
        commit('setGendre', value)
    },
    setNationality({ commit }, value) {
        commit('setNationality', value)
    },
    setLevelOfStudy({ commit }, value) {
        commit('setLevelOfStudy', value)
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
    setState({ commit }, value) {
        commit('setState', value)
    },
    setCity({ commit }, value) {
        commit('setCity', value)
    },
    setAddress1({ commit }, value) {
        commit('setAddress1', value)
    },
    setAddress2({ commit }, value) {
        commit('setAddress2', value)
    },
    setSpecialNeeds({ commit }, value) {
        commit('setSpecialNeeds', value)
    },
    setComments({ commit }, value) {
        commit('setComments', value)
    },
    setPreferredIntake({ commit }, value) {
        commit('setPreferredIntake', value)
    },
    setUniversityDegree({ commit }, value) {
        commit('setUniversityDegree', value)
    },
    setUniversityCollege({ commit }, value) {
        commit('setUniversityCollege', value)
    },
    setSecondarySchool({ commit }, value) {
        commit('setSecondarySchool', value)
    },
    setEnglishProficiency({ commit }, value) {
        commit('setEnglishProficiency', value)
    },
    setCurrentAddress({ commit }, value) {
        commit('setCurrentAddress', value)
    },
    setDateOfBirth({ commit }, value) {
        commit('setDateOfBirth', value)
    },
    setSubject({ commit }, value) {
        commit('setSubject', value)
    },
    setUniversity({ commit }, value) {
        commit('setUniversity', value)
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
    setStudentFirstName(state, value) {
        state.entry.student_first_name = value
    },
    setStudentLastName(state, value) {
        state.entry.student_last_name = value
    },
    setGendre(state, value) {
        state.entry.gendre = value
    },
    setNationality(state, value) {
        state.entry.nationality = value
    },
    setLevelOfStudy(state, value) {
        state.entry.level_of_study = value
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
    setState(state, value) {
        state.entry.state = value
    },
    setCity(state, value) {
        state.entry.city = value
    },
    setAddress1(state, value) {
        state.entry.address_1 = value
    },
    setAddress2(state, value) {
        state.entry.address_2 = value
    },
    setSpecialNeeds(state, value) {
        state.entry.special_needs = value
    },
    setComments(state, value) {
        state.entry.comments = value
    },
    setPreferredIntake(state, value) {
        state.entry.preferred_intake = value
    },
    setUniversityDegree(state, value) {
        state.entry.university_degree_id = value
    },
    setUniversityCollege(state, value) {
        state.entry.university_college = value
    },
    setSecondarySchool(state, value) {
        state.entry.secondary_school = value
    },
    setEnglishProficiency(state, value) {
        state.entry.english_proficiency = value
    },
    setCurrentAddress(state, value) {
        state.entry.current_address = value
    },
    setDateOfBirth(state, value) {
        state.entry.date_of_birth = value
    },
    setSubject(state, value) {
        state.entry.subject_id = value
    },
    setUniversity(state, value) {
        state.entry.university_id = value
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