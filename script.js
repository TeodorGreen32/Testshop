let goods = [
    {
        "name" : "Банан",
        "imgpath" : "img/banana.png",
        "cost" : 50
    },
    {
        "name" : "Яблоко",
        "imgpath" : "img/Apple.png",
        "cost" : 30
    },
    {
        "name" : "Чеснок",
        "imgpath" : "img/chesnok.png",
        "cost" : 5
    },
    {
        "name" : "Апельсин",
        "imgpath" : "img/orange.png",
        "cost" : 30
    },
    {
        "name" : "Гранат",
        "imgpath" : "https://pngicon.ru/file/uploads/granate.png",
        "cost" : 30
    },
    {
        "name" : "Куриное яйцо",
        "imgpath" : "https://img01.flagma.be/photo/oeuf-de-poule-c1-en-gros-yayco-kurinoe-c1-1680231_big.jpg",
        "cost" : 30
    },
    {
        "name" : "Алмаз",
        "imgpath" : "https://pngimg.com/uploads/diamond/diamond_PNG6692.png",
        "cost" : 19000
    }
]


let cards = document.querySelector(".wrapper");
let btn = document.querySelector(".cfooter");

function returnarr(){
out = "";
for(let key in goods){
    out+=`<div class='cards'>
    <p> ${goods[key].name} </p> 
    <img src='${goods[key].imgpath}'>
    <p class='cost'>${goods[key].cost} руб</p>
    </div>`;
    cards.innerHTML = out;
};
}
returnarr();

btn.addEventListener('click',e=>{
    switch (e.target.innerHTML) {
       case "Цена по убыв." : {
            goods.sort(function(a,b){
                if(a.cost > b.cost) return -1;
            });
            returnarr();
            break;
        }
        case "Цена по возр.": {
            goods.sort(function(a,b){
                if(a.cost < b.cost) return -1;
            })
            returnarr();
            break;
        }

    }
})

