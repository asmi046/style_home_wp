document.addEventListener("DOMContentLoaded", () => { 
    let tap_selector_active = "select"
    const uni_selector = document.querySelectorAll(".uni_selector")

    for (let i = 0; i < uni_selector.length; i++) { 
        uni_selector[i].addEventListener("click", function (e) {

            e.preventDefault()
            let box_id = uni_selector[i].dataset.boxid
            let box_group_selector = uni_selector[i].dataset.boxgroup

            for (let i = 0; i < uni_selector.length; i++)
                uni_selector[i].classList.remove(tap_selector_active)

            uni_selector[i].classList.toggle(tap_selector_active)

            const group_info = document.querySelectorAll("."+box_group_selector)
            for (let i = 0; i < group_info.length; i++)
                group_info[i].classList.remove(tap_selector_active)

            document.getElementById(box_id).classList.toggle(tap_selector_active)
        })
    }
})