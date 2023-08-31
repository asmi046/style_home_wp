export default {
    template: "#calc_form_component",

    props: ['redirect'],

    setup(props) {
        const base_price = 20000

        let where_value = Vue.ref(1.4)
        let show_form = Vue.ref(true)
        let phone = Vue.ref("")
        const where = [
            ["Новостройка", 1.4],
            ["Частный дом", 1.2],
            ["Б/У фонд", 1.2]
        ]

        let rem_value = Vue.ref(1)
        const rem_type = [
            ["Капитальный", 1],
            ["Косметический", 1.2],
            ["Чистовой", 1.5]
        ]

        let diz_value = Vue.ref(1)
        const diz_proj = [
            ["Да", 1],
            ["Нет", 1.5],
        ]

        let pl = Vue.ref(75)

        let errorList = Vue.ref([]);

        let showLoader = Vue.ref(false);

        const sendMsg = () => {

            errorList.value = [] 
            if (phone.value == "") {
                errorList.value.push("Поле 'Телефон' не заполнено");
                return
            }
                
            showLoader.value = true;

            var formData = new FormData();
            formData.append('action', "calc_sendr");
            formData.append('nonce', allAjax.nonce);

            axios.post(allAjax.ajaxurl, formData)
            .then((response) => {
                showLoader.value = false
                document.location.href=props.redirect
            })
            .catch( (error) => {
                showLoader.value = false
                errorList.value.push(error.response.data.message)
                console.log(error)
            });
        }

        return {
            show_form,
            base_price,
            where,
            rem_type,
            diz_proj,
            where_value,
            rem_value,
            diz_value,
            pl,
            errorList,
            showLoader,
            phone,
            sendMsg,
            price: Vue.computed(() => {
                return (base_price * where_value.value * rem_value.value * diz_value.value) * pl.value
            })
        }
    }
}