const $html = document.querySelector('html')
const $checkbox = document.querySelector('#flexSwitchCheckDefault')

$checkbox.addEventListener('change',function(){      /* evento checkbox mudar as cores */
    $html.classList.toggle('ligth')
})
