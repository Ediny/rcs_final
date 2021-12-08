let main = document.body;

function changeBg(param) {
    let choice = param.value;
    if(choice === 'ocean'){
        localStorage.removeItem('expresso');
        localStorage.removeItem('maldives');
        localStorage.removeItem('sky');
        localStorage.setItem('ocean', true);
        main.style.background = 'linear-gradient(to right, #4286f4, #373B44)';
    }else if(choice === 'expresso') {
        localStorage.removeItem('ocean');
        localStorage.removeItem('maldives');
        localStorage.removeItem('sky');
        localStorage.setItem('expresso', true);
        main.style.background = 'linear-gradient(to right, #3c1053, #ad5389)';
    } else if(choice === 'maldives'){
        localStorage.removeItem('ocean');
        localStorage.removeItem('expresso');
        localStorage.removeItem('sky');
        localStorage.setItem('maldives', true);
        main.style.background = 'linear-gradient(to right, #0ED2F7, #B2FEFA)';
    } else if(choice === 'sky'){
        localStorage.removeItem('ocean');
        localStorage.removeItem('maldives');
        localStorage.removeItem('expresso');
        localStorage.setItem('sky', true);
        main.style.background = 'linear-gradient(to right, #CFDEF3, #E0EAFC)';
    } else {
        main.style.background = 'white';
    }
};

if(localStorage.getItem('ocean')) {
    main.style.background = 'linear-gradient(to right, #4286f4, #373B44)';
}

if(localStorage.getItem('expresso')) {
    main.style.background = 'linear-gradient(to right, #3c1053, #ad5389)';
}

if(localStorage.getItem('maldives')) {
    main.style.background = 'linear-gradient(to right, #0ED2F7, #B2FEFA)';
}

if(localStorage.getItem('sky')) {
    main.style.background = 'linear-gradient(to right, #CFDEF3, #E0EAFC)';
}



