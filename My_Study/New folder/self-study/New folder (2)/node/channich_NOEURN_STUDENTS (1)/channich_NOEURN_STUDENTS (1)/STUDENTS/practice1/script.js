// GET URL : https://reqres.in/api/unknown/2
axios.get('https://reqres.in/api/unknown/2')
    .then(response => {
        // Handling the response data
        console.log('Data from Axios (GET):', response.data);
        showText(response.data.data);
    })

    .catch(error => {
        // Handling errors
        console.error('Error from Axios (GET):', error.message);
    });

function showText(data){
    let text = document.querySelector('#theText');
    text.textContent = data['name'];
    text.style.background = data['color'];
}