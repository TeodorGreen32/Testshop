let buy = document.querySelector('.buy');
let res = document.querySelector('.count');
let k = 0;
buy.addEventListener('click',e=>{
    
    if(e.target.tagName == "BUTTON" && e.target.innerHTML == '+' || e.target.innerHTML == '-'){
        
        if(e.target.innerHTML == '+'){
            k++;
            
            res.innerHTML = +(k);
        }
        if(e.target.innerHTML == '-'){
            if(k > 0) k--;
            res.innerHTML = +(k);
        }
    }
})