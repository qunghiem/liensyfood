// click bars in mobile
document.querySelector('.bars').addEventListener('click', function() {
  var menu = document.querySelector('header .group-header .menu-header ul');
  if (menu.style.display === "none" || menu.style.display === "") {
    menu.style.display = "flex";
  } else {
    menu.style.display = "none";
  }
});

const carouselItems = document.querySelectorAll('.carousel-item-product');
carouselItems.forEach(item => {
  const columns = item.querySelectorAll('.col-md-3');
  columns.forEach(column => {
    column.classList.add('col-6');
  });
});


