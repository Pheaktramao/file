let movieList = [
    {
        id: 1,
        title: "កង្រីជាតិថ្មី",
        image: "images/poster-1.jpg",
        text: "រឿងព្រេងខ្មែរ​ ជារឿងនិទានប្រកបដោយគតិអប់រំទាក់ទិននឹងសីលធម៌សង្គម"
    },
    {
        id: 2,
        title: "ទាវសម័យថ្មី",
        image: "images/poster-2.jpg",
        text: "រឿងព្រេងខ្មែរ​ ជារឿងនិទានប្រកបដោយគតិអប់រំទាក់ទិននឹងសីលធម៌សង្គម"
    },
    {
        id: 3,
        title: "វិធាវី ២០២៤",
        image: "images/poster-3.jpg",
        text: "រឿងព្រេងខ្មែរ​ ជារឿងនិទានប្រកបដោយគតិអប់រំទាក់ទិននឹងសីលធម៌សង្គម"
    },
    {
        id: 4,
        title: "កាកី កែខ្លួន",
        image: "images/poster-4.jpg",
        text: "រឿងព្រេងខ្មែរ​ ជារឿងនិទានប្រកបដោយគតិអប់រំទាក់ទិននឹងសីលធម៌សង្គម"
    },
    {
        id: 5,
        title: "កុលាបប៉ៃលិន ថ្មី",
        image: "images/poster-5.jpg",
        text: "រឿងព្រេងខ្មែរ​ ជារឿងនិទានប្រកបដោយគតិអប់រំទាក់ទិននឹងសីលធម៌សង្គម"
    },
    {
        id: 6,
        title: "ស្មេហ៍ក្រោមពន្លឺច៍ន្ទ្រា",
        image: "images/poster-6.jpg",
        text: "រឿងព្រេងខ្មែរ​ ជារឿងនិទានប្រកបដោយគតិអប់រំទាក់ទិននឹងសីលធម៌សង្គម"
    },
];


const createPoster = (title, image, content) => {
    // TODO: create poster with different content here
    let postersImage = document.createElement('div')
   postersImage.className = "poster-image"

   let postersText = document.createElement('div')
   postersText.setAttribute('class','poster-text')

   let posters = document.createElement('div');
   posters.setAttribute('class','poster');

   let img= document.createElement('img');
   img.src = image;

   let h1 = document.createElement('h1')
   h1.textContent = title;
   let p = document.createElement('p');
   p.textContent = content;

   postersImage.appendChild(img);
   postersText.appendChild(h1);
   postersText.appendChild(p);
   posters.appendChild(postersImage)
   posters.appendChild(postersText)
   container.appendChild(posters);
}


// Main code 
const container = document.querySelector('.container');

// TODO: Call function to create poster with data here
movieList.forEach(list => {
    createPoster(list.title,list.image,list.text)
});