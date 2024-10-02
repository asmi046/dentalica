<template>
    <div v-show="showModal" @click.self="closeWin()" class="popup_wrapper">
        <div class="popup">
            <div @click.prevent="closeWin()" class="popup__close circl_btn" aria-label="Закрыть модальное окно">
                <div class="icon-menu toggle_menu active" aria-label="Бургер меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div v-show="!loadet" class="action_window">
                <img :src="storage_path+'/'+img" :alt="title">
                <h3>{{title}}</h3>
                <div class="text_styles" v-html="description"></div>
            </div>

            <div v-show="loadet" class="loader">

            </div>

        </div>
    </div>
</template>

<script setup>
    import { ref, watch } from 'vue'

    let title = ref(false)
    let img = ref(false)
    let description = ref(false)

    let loadet = ref(true)
    let showModal = ref(false)
    let indexAction = ref(0)

    const storage_path = window.storage || '';

    const props = defineProps({
        foo: String
    })

    const closeWin = () => {
            showModal.value = false
            history.pushState('', document.title, window.location.pathname+window.location.search)
    }

    watch(indexAction, (newVal, oldVal) => {
        loadet.value = true
        axios.get('/sale/'+newVal)
            .then((response) => {
                loadet.value = false
                title.value = response.data.title;
                description.value = response.data.description;
                img.value = response.data.img;
                console.log(response)
            })
            .catch( (error) => {
                console.log(error)
            });
    })

    const openAndGetIndex = () => {
        if (location.hash.indexOf('actionWindow') != -1) {
            showModal.value = true
            indexAction.value = location.hash.substring(location.hash.lastIndexOf('_') + 1);
        }
    }

    window.addEventListener('hashchange', openAndGetIndex)
    openAndGetIndex()


</script>

<style leng="scss" scoped>
    .popup_wrapper {
        width:100%;
        height: 100%;
        display: flex;
        position: fixed;
        left: 0;
        top:0;
        z-index: 11000;
        background-color: #000000aa;
        overflow: auto;
    }

    .popup {
        width:50%;
        max-width: 600px;
        min-width: 290px;
        height: auto;
        background-color: white;
        margin: auto;
        border-radius: 11px;
        position:relative;
        padding: 40px;

    }

    .popup__close {
        position: absolute;
        top: 18px;
        right: 15px;
        cursor: pointer;
        z-index: 30;
        width: 40px;
        height: 40px;
    }

    .policy_descr,
    .sending_form button,

    .sending_form textarea,
    .sending_form input{
        margin: 0 0 20px 0;
    }

    .policy_descr a{
        text-decoration: underline;
    }

    .sending_form .control_wrap button{
        width:50%;
    }

    .sending_form .control_wrap {
        max-width: 100%;
        display: flex;
    }

    .sending_form {
       display: flex;
       flex-direction: column;
    }

    .sub_h {
        margin-bottom: 20px;
    }

    .modal_h2 {
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .policy_descr {
        font-size: 14px;
    }

    .loader {
        width:80px;
        height: 80px;
        margin-left: 10px;
        margin: auto;
        background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQogIHZpZXdCb3g9IjAgMCAxMDAgMTAwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMDAgMTAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxjaXJjbGUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utd2lkdGg9IjQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgY3g9IjUwIiBjeT0iNTAiIHI9IjQ4Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSI0IiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI1MCIgeTE9IjUwIiB4Mj0iODUiIHkyPSI1MC41Ij4NCiAgPGFuaW1hdGVUcmFuc2Zvcm0NCiAgICAgICBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iDQogICAgICAgZHVyPSIycyINCiAgICAgICB0eXBlPSJyb3RhdGUiDQogICAgICAgZnJvbT0iMCA1MCA1MCINCiAgICAgICB0bz0iMzYwIDUwIDUwIg0KICAgICAgIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiAvPg0KPC9saW5lPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iNCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iNTAiIHkxPSI1MCIgeDI9IjQ5LjUiIHkyPSI3NCI+DQogIDxhbmltYXRlVHJhbnNmb3JtDQogICAgICAgYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIg0KICAgICAgIGR1cj0iMTVzIg0KICAgICAgIHR5cGU9InJvdGF0ZSINCiAgICAgICBmcm9tPSIwIDUwIDUwIg0KICAgICAgIHRvPSIzNjAgNTAgNTAiDQogICAgICAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIC8+DQo8L2xpbmU+DQo8L3N2Zz4NCg==");
        background-size: 60%;
        background-position: center;
        background-repeat: no-repeat;
        background-color: var(--main-color);
        border-radius: 20px;
        background-color: #7A9154;
    }

    .error_list_wrap {
        display: flex;
        flex-direction: column;
    }

    .error_list_wrap .error{
        color: white;
        background-color: crimson;
        border-radius: 9px;
        padding: 5px 15px;
        margin-bottom: 20px;
    }

    .accept_message .emoji {
        font-size: 28px;
    }


    @media (max-width: 480px){
        .popup_wrapper {
            padding-bottom: 20px;
        }

        .popup {
            padding: 30px;
            margin-top: 20px;
            min-width: 90%;
        }

        .modal_h2 {
            font-size: 42px;
        }
    }

    @media (max-width: 320px){
        .popup {
            padding: 20px;
            min-width: 250px;
        }

        .modal_h2 {
            font-size: 38px;
        }

        .modal_h2 {
            margin-bottom: 0;
        }
    }

</style>
