// document.addEventListener("DOMContentLoaded", () => { 
    
//     const all_submenus = document.querySelectorAll(".menu_head a.sub_puncts")
//     for (let i = 0; i < all_submenus.length; i++) { 
//         all_submenus[i].addEventListener("mouseenter", function (e) {
//             e.preventDefault()
//             menu_sub_puncts.classList.add("_active");
//             let sub_menu_name = all_submenus[i].textContent;


//             console.log(sub_menu_name)
//         })
        
//         all_submenus[i].addEventListener("mouseout", function (e) {
//             e.preventDefault()
//             let sub_menu_name = all_submenus[i].textContent;
//             menu_sub_puncts.classList.remove("_active");
//             console.log("out: "+sub_menu_name)
//         })
//     }

// })


// Скрывалка текста


document.addEventListener("DOMContentLoaded", () => { 
    let showBtn = document.getElementById("showTxtBtn") 
    let textBlk = document.getElementById("textBlkSh") 

    showBtn.addEventListener("click", function (e) { 
        e.preventDefault()
        textBlk.classList.toggle("shoved")

        if (textBlk.classList.contains("shoved"))
            showBtn.innerHTML = "Свернуть"
        else
            showBtn.innerHTML = "Читать далее"

    })
})

// Мобильное мею

document.addEventListener("DOMContentLoaded", () => { 
    burger_element.addEventListener("click", function (e) { 
        burger_element.classList.toggle("open")
        mobile_menu.classList.toggle("open")
    })
})


document.addEventListener("DOMContentLoaded", () => { 
    const anchors = document.querySelectorAll('a.scroll-to')

    for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()
        
        const blockID = anchor.getAttribute('href')
        
        document.querySelector(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
        })
    })
    }
})

document.addEventListener("DOMContentLoaded", () => { 

    let allPhoneInput = document.querySelectorAll("input[type=tel]");
    
    console.log(allPhoneInput)

    for (let i =0; i<allPhoneInput.length; i++)
        IMask(allPhoneInput[i], {mask: '+0 (000) 000-00-00'})
})