import { isLoggedIn, logOut } from "./shared/utils/auth";

export default {

    state: {
        lastSearch: {
            from: null,
            to: null
        },
        basket: {
            items: []
        },
        isLoggedIn: false,
        user: {}
    },
    mutations: {
        setLastSearch(state, payload) {
            state.lastSearch = payload;
        },
        addToBasket(state, payload) {
            state.basket.items.push(payload);
        },
        removeFromBasket(state, payload) {
            state.basket.items = state.basket.items.filter(item => item.bookable.idcourse !== payload);
        },
        setBasket(state, payload) {
            state.basket = payload;
        },
        setUser(state, payload) {
            state.user = payload;
        },
        setLoggedIn(state, payload) {
            state.isLoggedIn = payload;
        }
    },
    actions: {
        setLastSearch(context, payload) {
            context.commit('setLastSearch', payload);
            localStorage.setItem('lastSearch', JSON.stringify(payload));
        },
        loadStoredState(context) {
            const lastSearch = localStorage.getItem('lastSearch');
            if (lastSearch) {
                context.commit('setLastSearch', JSON.parse(lastSearch));
            }

            const basket = localStorage.getItem('basket');
            if (basket) {
                context.commit('setBasket', JSON.parse(basket));
            }

            context.commit("setLoggedIn", isLoggedIn());
        },
        addToBasket({ commit, state }, payload) {
            // context.state, context.commit
            commit("setBasket", { items: [] });
            localStorage.setItem("basket", JSON.stringify(state.basket));
            commit('addToBasket', payload);
            localStorage.setItem('basket', JSON.stringify(state.basket));
        },
        removeFromBasket({ commit, state }, payload) {
            commit('removeFromBasket', payload);
            localStorage.setItem('basket', JSON.stringify(state.basket));
        },
        clearBasket({ commit, state }, payload) {
            commit("setBasket", { items: [] });
            localStorage.setItem("basket", JSON.stringify(state.basket));
        },
        async loadUser({ commit, dispatch }) {

            // if (!isLoggedIn()) {
            try {

                // let userAuth = null;
                // axios.get('/checklogin').then(
                //     function(response) {
                //         userAuth = response.data
                //         console.log("fadi", userAuth)
                //     }.bind(this)
                // );
                const user = JSON.parse(localStorage.getItem("userauth"));

                if (user.auth_user) {

                    commit("setUser", user.auth_user);
                    commit("setLoggedIn", true);
                    localStorage.setItem("isLoggedIn", true);
                } else {

                    dispatch("logout");
                }
            } catch (error) {

                dispatch("logout");
            }
            //}
        },
        logout({ commit }) {
            commit("setUser", {});

            commit("setLoggedIn", false);
            localStorage.setItem("isLoggedIn", false);
            logOut();
        }
    },
    getters: {
        itemsInBasket: (state) => state.basket.items.length,
        inBasketAlready(state) {
            return function(id) {
                return state.basket.items.reduce(
                    (result, item) => result || item.bookable.idcourse === id,
                    false
                );
            }
        }
    }
};