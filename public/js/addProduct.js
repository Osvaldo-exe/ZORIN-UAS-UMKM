
var addBest = document.getElementById('addBest')
var formBest = document.getElementById('formBest')
var submitBest = document.getElementById('submitBest')
var Cancel = document.getElementById('Cancel')

addBest.addEventListener('click',function(){
    formBest.style.display = 'grid'
    addBest.style.display = 'none'
    addAnother.style.display = 'none'
})

submitBest.addEventListener('click',function(){
    formBest.style.display = 'none'
    addBest.style.display = 'flex'
    addAnother.style.display = 'flex'
})

Cancel.addEventListener('click', function(){
    formBest.style.display = 'none'
    addBest.style.display = 'flex'
})

// var bestForm = document.getElementById('bestForm')
// var imageB = document.getElementById('imageB')
// var product_nameB = document.getElementById('product_nameB')
// var priceB = document.getElementById('priceB')
// var product_descriptionB = document.getElementById('product_descriptionB')

// bestForm.addEventListener('submit', function(){
//     imageB.value = ''
//     product_nameB.value = ''
//     priceB.value = ''
//     product_descriptionB.value = ''
// })