import ModalWin from './components/modal-win.js'
import CalcForm from './components/calc-form.js'

const pd = {
    mounted(el)  {  
        el.oninput = function(e) {
          if (!e.isTrusted) {
            return
          }
    
        const x = this.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/)
        x[1] = '+7' 

        this.value = !x[3] ? x[1] + ' (' + x[2] : x[1] + ' (' + x[2] + ') ' + x[3] + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '')

        }
      },
}

const win_app = Vue.createApp({})
win_app.directive('phone', pd)
win_app.component('modal-win', ModalWin)
win_app.mount("#win_app")

const calc_form = Vue.createApp({})
calc_form.directive('phone', pd)
calc_form.component('calc-form', CalcForm)
calc_form.mount("#calc_form_blk")


