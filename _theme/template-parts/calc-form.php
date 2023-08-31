<template id="calc_form_component">
    <form action="">
        <div class="bn_form_wrapper">

            <label for="sel_remont">
                <span>Где нужен ремонт?</span>
                <div class="select_wrapper">
                    <select name="sel_remont" id="sel_remont">
                        
                        <option v-for="(value, name, index) in where" :key="'where_'+index" :value="value[1]">{{value[0]}}</option>
                    
                    </select>
                </div>
            </label>
            
            <label for="sel_type">
                <span>Вид ремонта:</span>
                <div class="select_wrapper">
                    <select name="sel_type" id="sel_type">
                    <option v-for="(value, name, index) in rem_type" :key="'rem_type_'+index" :value="value[1]">{{value[0]}}</option>
                    </select>
                </div>
            </label>
            
            <label for="sel_project">
                <span>Дизайн проект?</span>
                <div class="select_wrapper">
                    <select name="sel_project" id="sel_project">
                    <option v-for="(value, name, index) in diz_proj" :key="'diz_proj_'+index" :value="value[1]">{{value[0]}}</option>
                    </select>
                </div>
            </label>

            <label for="sel_plce">
                <span>Площадь м²:</span>
                <input id="sel_plce" type="text" name="ploshad" placeholder="Площадь">
            </label>

        </div>

        <button class="btn" type="submit">Рассчитать стоимость</button>
        <p class="snoska">Нажимая на кнопку, вы даете согласие на обработку персональных данных</p>
    </form>
</template>