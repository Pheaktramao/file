axios.get('https://jsonplaceholder.typicode.com/posts')
  .then(response => {
    // Handling the response data
    console.log('Data from Axios (GET):', response.data);
    getUsers(response.data);
  })
  .catch(error => {
    // Handling errors
    console.error('Error from Axios (GET):', error.message);
  });
function getUsers(users) {
    let contaoiner = document.querySelector('.container');
    let card = document.createElement('div');
    card.classList.add('cardDiv');
    users.forEach(user => {
        let cardHeader = document.createElement('div');
        cardHeader.classList.add('card-header');
        let cardBody = document.createElement('div');
        cardBody.classList.add('card-body');

        cardHeader.textContent = user.title;
        cardBody.textContent = user.body;

        card.appendChild(cardHeader);
        card.appendChild(cardBody);

        contaoiner.appendChild(card);
    });
}