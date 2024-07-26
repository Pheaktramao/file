
// Remove row functions from the table
const removeRow = (event) => {
    let removeUse = event.target.closest('tr');
   // TODO: Remove row with confirmation message when click on remove button
   let confirmation = confirm("Do you want to remove?")
   if (confirmation) {
    removeUse.remove();
   }
}

// View user information in list 
const viewUser = (event) => {
    let tr = event.target.closest('tr');
    // TODO: View user information in list by click on view button
    console.log(tr.children);
}

// Main
const leftBox = document.querySelector('.left-box');
const btnViews = document.querySelectorAll('.view');
const btnRemoves = document.querySelectorAll('.remove');

// TODO: Add Event listeners to remove button
for (const btnRemove of btnRemoves) {
    btnRemove.addEventListener('click',removeRow)
}

// TODO: Add event listeners to view button
for (const btnView of btnViews) {
    btnView.addEventLister('click',viewUser)
}
