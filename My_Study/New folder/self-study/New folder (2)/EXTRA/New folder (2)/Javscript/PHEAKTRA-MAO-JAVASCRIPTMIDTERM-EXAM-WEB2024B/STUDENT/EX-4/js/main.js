const randomAuthor = () => {
   // TODO: random author name
   
}
randomAuthor()
// search movie title
const searchMovieTitle = () => {
    // TODO: search movie by title
    
}


// Main
const tr = document.querySelectorAll('tbody tr');
const searchText = document.querySelector('#search');
const showTitle = document.querySelector('h1');

// TODO: Add event listeners on input search
searchText.addEventListener('keyup',searchText)
// TODO: call randomAuthor function every 1000 milliseconds
setInterval(randomAuthor,10000)