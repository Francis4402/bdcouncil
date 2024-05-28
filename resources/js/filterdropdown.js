const filterbtn = document.querySelector('.filter-btn');
const filter = document.querySelector('.filter');

filterbtn.addEventListener('click', function(){
  filter.classList.toggle('hidden');
});

document.addEventListener('click', function(event){
    if(!filter.contains(event.target) && !filterbtn.contains(event.target)) {
      filter.classList.add('hidden');
    }
})