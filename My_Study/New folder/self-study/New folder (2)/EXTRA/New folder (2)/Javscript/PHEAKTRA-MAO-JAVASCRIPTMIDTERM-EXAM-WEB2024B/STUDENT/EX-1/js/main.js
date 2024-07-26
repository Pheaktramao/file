const createPoster = () => {
   // event.preventDefault();
   // TODO: Create poster here
   let postersImage = document.createElement('div')
   postersImage.className = "poster-image"
   let postersText = document.createElement('div')
   postersText.setAttribute('class','poster-text')
   let posters = document.createElement('div');
   posters.setAttribute('class','poster');
   let image= document.createElement('img');
   image.src = "images/poster.jpg";
   let h1 = document.createElement('h1')
   h1.textContent = "កង្រីជាតិថ្មី";
   let p = document.createElement('p');
   p.textContent = "រឿងព្រេងខ្មែរ​ ជារឿងនិទានប្រកបដោយគតិអប់រំទាក់ទិននឹងសីលធម៌សង្គម និង សៀវភៅរូបភាពសំរាប់កុមារជាដើម។"
   postersImage.appendChild(image);
   postersText.appendChild(h1);
   postersText.appendChild(p);
   posters.appendChild(postersImage)
   posters.appendChild(postersText)
   container.appendChild(posters);
}
// Main code 
const container = document.querySelector('.container');
let body = document.querySelector('body');
// TODO:  Call function to create 10 poster here
for (let i = 0; i <10 ; i++) {
   createPoster()
}