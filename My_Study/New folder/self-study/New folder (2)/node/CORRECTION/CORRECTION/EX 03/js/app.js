const input = document.querySelector('#search');
const searchButton = document.querySelector('#search-this');
const form =document.querySelector('.form-inline');
const container = document.getElementsByClassName("container")[0];
const SEARCH_KEY = "search_query";
const MOVIES_KEY = "movie_list";

function displaySearch(){
    const search = input.value;
    saveSearch(search);
    axios.get('http://www.omdbapi.com/?apikey=fab8d88e&s='+search)
        .then(
            function(response){
                movieList = response.data.Search;
                console.log("Search request result:");
                console.log(movieList);
                displayMovieList(movieList);
            })
        .catch(
            function(error) {
                console.log(error);
                let messageNoResult = document.createElement("h1");
                messageNoResult.className = "movies-data";
                messageNoResult.textContent = "The request sent to the API leads to this error " + error;
                container.appendChild(messageNoResult);
            });
}


function displayMovieList(movieList){
    let oldMoviesData = document.getElementsByClassName("movies-data")[0];
    if (oldMoviesData !== undefined){
        oldMoviesData.remove();
    }
    
    if ((movieList !== undefined) && (movieList.length !== 0)){

        let moviesData = document.createElement("div");
        moviesData.className = "movies-data";
        container.appendChild(moviesData);

        let listOfMovies = document.createElement("ul");
        listOfMovies.className = "list-of-movies";
        moviesData.append(listOfMovies);
        
        for (movieID in movieList){
            displayOneMovie(movieList[movieID], movieID, listOfMovies);
        }
    }
    else{
        let messageNoResult = document.createElement("h1");
        messageNoResult.className = "movies-data";
        messageNoResult.textContent = "No movie matches this search request in our database";
        container.appendChild(messageNoResult);
    }

}


function displayOneMovie(movieObject, idNumber, list){
    // poster, title type, year

    let listElement = document.createElement("li");
    listElement.className = "post";
    list.appendChild(listElement);

    let imageDOM = document.createElement("div");
    imageDOM.className = "post-img";
    listElement.appendChild(imageDOM);

    let posterDOM = document.createElement("img");
    posterDOM.className = "poster";
    posterDOM.setAttribute("src", movieObject.Poster);
    imageDOM.appendChild(posterDOM);

    let contentDOM = document.createElement("div");
    contentDOM.className = "post-content";
    listElement.appendChild(contentDOM);

    let titleDOM = document.createElement("h3");
    titleDOM.className ="title";
    titleDOM.textContent = movieObject.Title;
    contentDOM.appendChild(titleDOM);

    let yearDOM = document.createElement("p");
    yearDOM.className = "year";
    yearDOM.textContent = "Year: " + movieObject.Year;
    contentDOM.appendChild(yearDOM);

    let typeDOM = document.createElement("p");
    typeDOM.className = "type";
    typeDOM.textContent = "Type: " + movieObject.Type;
    contentDOM.appendChild(typeDOM);

    let separation = document.createElement("hr");
    list.appendChild(separation)



}


// Use local storage to keep in store the search 

function saveSearch (search_query){
    localStorage.setItem(SEARCH_KEY, search_query);
};

function loadData(){
    let search_query = localStorage.getItem(SEARCH_KEY);
    if ((search_query !== undefined) && (search_query !== null)){
        input.value = search_query;
        displaySearch();
    }
}

function enterKeyPressed(event){
    if (event.keyCode === 13) {
        event.preventDefault();
        displaySearch();
    }
}


searchButton.addEventListener('click',displaySearch);
form.addEventListener('keydown',enterKeyPressed);

loadData();