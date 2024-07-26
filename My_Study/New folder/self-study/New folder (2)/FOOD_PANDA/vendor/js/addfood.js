
const groupAdd =  document.querySelector('#group-add');
const adds =  document.querySelectorAll('#add');



for(let add of adds){
    add.addEventListener('click', (e)=>{
        let food = e.target.parentElement.parentElement.children[1].children[1].children[0].textContent;
        let price = e.target.parentElement.parentElement.children[1].children[1].children[1].textContent;
        listFoodCodi(food, price);
    })
}


function listFoodCodi(food, price){
    let food_lists = document.querySelectorAll("#list_food");
    let isFood = true;
    for(let value of food_lists){
        if(food == value.textContent){
            isFood = false;
        }
    }
    if(isFood){
        creatCarelist(food, price);
    }
    let btnPlus = document.querySelectorAll("#plus");
    let btnMini = document.querySelectorAll("#mini");
    for(let btn of btnPlus){
        btn.addEventListener('click', (e)=>{
            let qty = e.target.parentElement.parentElement.children[1];
            qty.value ++;
        });
    }

    for(let mini of btnMini){
        mini.addEventListener('click', ()=>{
            let qty = mini.parentElement.parentElement.children[1];
            if(qty.value > 1){
                qty.value --; 
            }
        });
    }
}


function creatCarelist(food, price){
    
    
    let cardList = document.createElement('div');
    cardList.setAttribute("class", "gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom");
    let media = document.createElement('div');
    media.setAttribute("class", "media align-items-center");
    let hh = document.createElement('div');
    hh.setAttribute('class', 'mr-2 text-danger');
    let mediaBody = document.createElement('div');
    mediaBody.setAttribute('class', 'media-body');
    let foodname = document.createElement('p');
    foodname.setAttribute('class', 'm-0');
    foodname.id="list_food";
    foodname.textContent = food;

    let mediaLeft = document.createElement('div');
    mediaLeft.setAttribute('class', 'd-flex align-items-center');
    let span = document.createElement('span');
    span.setAttribute('class', 'count-number float-right');
    let btn = document.createElement('button');
    btn.type = 'button';
    btn.setAttribute('class', 'btn-sm left dec btn btn-outline-secondary');
    let i = document.createElement('i');
    i.setAttribute('class', 'feather-minus');
    i.id = "mini";
    let input = document.createElement('input');
    input.setAttribute('class', 'count-number-input');
    input.type = 'text';
    input.readOnly;
    input.value = '1';
    let btn3 = document.createElement('button');
    btn3.type = 'button';
    btn3.setAttribute('class', 'btn-sm right inc btn btn-outline-secondary');
    let i1 = document.createElement('i');
    i1.setAttribute('class', 'feather-plus');
    i1.id = "plus";
    let foodPrice = document.createElement('p');
    foodPrice.setAttribute('class', 'text-gray mb-0 float-right ml-2 text-muted small');
    foodPrice.value = price;
    foodPrice.textContent = price;


    groupAdd.appendChild(cardList);
    cardList.appendChild(media);
    media.appendChild(hh);
   
    cardList.appendChild(mediaLeft);
    media.appendChild(mediaBody);
    mediaBody.appendChild(foodname);

    mediaLeft.appendChild(span);
    mediaLeft.appendChild(foodPrice);
    span.appendChild(btn);
    btn.appendChild(i);
    span.appendChild(input);
    span.appendChild(btn3);
    btn3.appendChild(i1);   
}



