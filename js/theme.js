function toogleCSSClass(el, cls){
    cls.forEach(function(c){
        el.classList.toggle(c);
    });
}

function toogleTheme(){
    let dic = {
        "navbar-light" : "navbar-dark",
        "bg-light" : "bg-dark",
        "text-light" : "text-dark",
        "border-light" : "border-dark",
        "wave-light" : "wave-dark",
    }

    for(let k in dic){
        let v = dic[k];
        let elements;
        let els = [];
        let cls = [k,v];

        if(document.getElementsByClassName(k).length > 0){
            elements = document.getElementsByClassName(k);
        } else {
            elements = document.getElementsByClassName(v);
        }
        [].push.apply(els, elements);
        els.forEach(function (el){
            toogleCSSClass(el, cls);
        });
    }
    toogleCSSClass(document.getElementById("iToggleTheme"), ["fa-moon", "fa-sun"]);
}