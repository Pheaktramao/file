function deleteRow(event){
    let row = event.target.closest('tr')
    row.remove()

}
let buttons = document.querySelectorAll('.btn')
for (const button of buttons) {
    button.addEventListener('click',deleteRow)
}