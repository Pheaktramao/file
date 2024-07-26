function showUser() {
    axios.get('https://reqres.in/api/users?page=2')
        .then(response => {
            console.log('Data from Axios (GET):', response.data);
            let body = document.querySelector('body');
            response.data.data.forEach(data => {
                body.innerHTML += `
                <div class="UL" style="border: 1px solid green; margin-left: 10PX; margin-top: 10PX;">
                <li>${data.last_name}</li>
                <li>${data.email}</li>
                </div>
                `
            })
        })
        .catch(error => {
            console.error('Error from Axios (GET):', error.message);
        });
}
let btn = document.querySelector('button');
btn.addEventListener('click', showUser)