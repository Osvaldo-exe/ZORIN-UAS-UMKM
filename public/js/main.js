let moon= document.getElementById("monn");
let text = document.getElementById("text");
let orang = document.getElementById("human");

let sunny_sun = document.getElementById("sunny");
let man = document.getElementById("man");

window.addEventListener("scroll",()=>{
    let value = window.scrollY;
    monn.style.top = (value - 250) *.6 +"px";
    text.style.top = 80 + value * -0.2 + "%";
    orang.style.left = value * 1.5 + "px";

})

var listItem = document.querySelectorAll("#list li a")

listItem.forEach(function(item) {
    item.addEventListener("click", function() {
        // remove classnya
        listItem.forEach(function(a){
            a.classList.remove('active')
        })
        // add classnya
        this.classList.add('active')
    })
});

//progress bar

let calcScrollValue  = ()=>{
    let scrollprogress = document.getElementById("progress");
    let pos = document.documentElement.scrollTop;
   
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let calcScrollValue = Math.round((pos * 100)/calcHeight);
    
    if(pos > 100){
        scrollprogress.style.display = "grid";
    }else{
        
        scrollprogress.style.display = "none";
    }
    scrollprogress.addEventListener("click",()=>{
        document.documentElement.scrollTop = 0;

    });
    scrollprogress.style.background = 'conic-gradient(#194eb9 ${scrollValue}%,#67ccff ${scrollValue}%)';
}

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

var more = document.getElementById('more')
var moreBtn = document.getElementById('moreBtn')
var lessBtn = document.getElementById('lessBtn')

function showMore(){
    moreBtn.style.display = 'none'
    more.style.display = 'inline-block'
    lessBtn.style.display = 'inline-block'
}

function showLess(){
    moreBtn.style.display = 'inline-block'
    more.style.display = 'none'
    lessBtn.style.display = 'none'
}

const allStar = document.querySelectorAll('#fiveStar .star')

allStar.forEach((item, idx)=> {
	item.addEventListener('click', function () {
		let click = 0

		allStar.forEach(i=> {
			i.classList.replace('bxs-star', 'bx-star')
			i.classList.remove('active')
		})
		for(let i=0; i<allStar.length; i++) {
			if(i <= idx) {
				allStar[i].classList.replace('bx-star', 'bxs-star')
			} else {
				allStar[i].style.setProperty('--i', click)
				click++
			}
		}
	})

    })

function resetStar(){
    allStar.forEach(i => {
        i.classList.replace('bxs-star', 'bx-star');
        i.classList.remove('active');
    });
}    
    document.addEventListener('DOMContentLoaded', function () {
    const sectionList = document.querySelectorAll('.list li a');

    function setActiveLink() {
        sectionList.forEach(link => {
            const rect = document.querySelector(link.getAttribute('href')).getBoundingClientRect();
            if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', setActiveLink);

    setActiveLink();
});



