const clearInput = () => {
   //TODO: Clear data from input field
   firstName.value = '';
   lastName.value = '';
   comment.value = '';
   province.value = ''
   console.log(genders);
   for (const gender of genders) {
      gender.checked = false
   }
   for (const skill of skills) {
      skill.checked = false
   }
}

const createRow = (event) => {
   event.preventDefault();
   let sex = ''
   for (const gender of genders) {
      if (gender.checked) {
         sex = gender
         console.log(sex);
      }
   }
   let res = ""
   for (const skill of skills) {
      if (skill.checked) {
         res += skill.value + ","
      }
   }

   let row = document.createElement('tr');
   // TODO: Create new row with data from input field
   let tdfirstName = document.createElement('td');
   tdfirstName.textContent = firstName.value;

   let tdLastName = document.createElement('td');
   tdLastName.textContent = lastName.value;

   let tdProvince = document.createElement('td');
   tdProvince.textContent = province.value;

   let tdGender = document.createElement('td');
   tdGender.textContent = sex.value;

   let tdSkill = document.createElement('td');
   tdSkill.textContent = res;

   let tdComment = document.createElement('td');
   tdComment.textContent = comment.value;

   row.appendChild(tdfirstName)
   row.appendChild(tdLastName)
   row.appendChild(tdProvince)
   row.appendChild(tdGender)
   row.appendChild(tdSkill)
   row.appendChild(tdComment)
   tbody.appendChild(row)
   clearInput();
}


// Main
const firstName = document.querySelector('#firstname');
const lastName = document.querySelector('#lastname');
const province = document.querySelector('#province');
const genders = document.querySelectorAll('input[type="radio"]');
const skills = document.querySelectorAll('.skill');
const comment = document.querySelector('#comment');
const tbody = document.querySelector('tbody');
const btnSubmit = document.querySelector('button');

// TODO: add event listeners to submit button
btnSubmit.addEventListener('click', createRow)