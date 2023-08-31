export default {
    template: "#calc_form_component",

    props: ['rout', 'redirect', 'hesh', 'title', 'subtitle'],

    setup(props) {
        const base_price = 20000

        const where = [
            ["Новостройка", 1.4],
            ["Частный дом", 1.2],
            ["Б/У фонд", 1.2]
        ]

        const rem_type = [
            ["Капитальный", 1],
            ["Косметический", -1.2],
            ["Чистовой", 1.5]
        ]

        const diz_proj = [
            ["Да", 1],
            ["Нет", 1.5],
        ]

        return {
            base_price,
            where,
            rem_type,
            diz_proj
        }
    }
}