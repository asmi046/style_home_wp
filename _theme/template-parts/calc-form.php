<template id="calc_form_component">
    <form v-if="show_form" action="">
        <h2>Расчитайте стоимость ремонта и получите скидку</h2>
        <div class="bn_form_wrapper">

            <label for="sel_remont">
                <span>Где нужен ремонт?</span>
                <div class="select_wrapper">
                    <select v-model="where_value" name="sel_remont" id="sel_remont">
                        <option v-for="(value, name, index) in where" :key="'where_'+index" :value="value[1]">{{value[0]}}</option>
                    </select>
                </div>
            </label>
            
            <label for="sel_type">
                <span>Вид ремонта:</span>
                <div class="select_wrapper">
                    <select v-model="rem_value" name="sel_type" id="sel_type">
                        <option v-for="(value, name, index) in rem_type" :key="'rem_type_'+index" :value="value[1]">{{value[0]}}</option>
                    </select>
                </div>
            </label>
            
            <label for="sel_project">
                <span>Дизайн проект?</span>
                <div class="select_wrapper">
                    <select v-model="diz_value" name="sel_project" id="sel_project">
                    <option v-for="(value, name, index) in diz_proj" :key="'diz_proj_'+index" :value="value[1]">{{value[0]}}</option>
                    </select>
                </div>
            </label>

            <label for="sel_plce">
                <span>Площадь м²:</span>
                <input v-model="pl" id="sel_plce" type="text" name="ploshad" placeholder="Площадь">
            </label>

        </div>

        <button @click.prevent="show_form = false" class="btn" type="submit">Рассчитать стоимость</button>
        <p class="snoska">Используя данную форму, вы даете согласие с <a href="<?php echo get_the_permalink(3); ?>">политикой обработки персональных данных</a></p>
    </form>
    <div v-else class="calc_result">
        <h2>Приблизительная стоимость ремонта Вашего помещения:</h2>
        <span class="calc_price">{{new Intl.NumberFormat("ru-RU").format(price)}} руб.</span>

        <p>Оставьте свои контакты и мы свяжемся с Вами и уточним детали</p>
        
        <label for="calc_tel_input">
            <input id="calc_tel_input"  type="tel" name="tel" v-phone v-model="phone" placeholder="Телефон*">
        </label>

        <div class="error_list_wrap">
            <div v-for="(item, index) in errorList" :key="index" class="error">{{item}}</div>
        </div>

        <div class="control_wrap">
            <button class="btn btn-fit" @click.prevent="show_form = true" >&larr; Назад</button>
            <button class="btn btn-fit btn-send" @click.prevent="sendMsg()">Отправить</button> <div v-show="showLoader" class="loader"></div>
        </div>

        <p class="snoska">Используя данную форму, вы даете согласие с <a href="<?php echo get_the_permalink(3); ?>">политикой обработки персональных данных</a></p>
    </div>
</template>