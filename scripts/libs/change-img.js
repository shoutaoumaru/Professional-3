const child = document.querySelector('.child');
const logo = document.querySelector('.logo');
const logoPc = document.querySelector('.logo-pc');
const pcNav = document.querySelector('.pc-nav');
const mBtn = document.querySelector('.mobile-menu__btn');
const callback = function (entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      logo.classList.add('inview');
      logoPc.classList.add('inview');
      mBtn.classList.add('inview');
      pcNav.classList.add('inview');
    } else {
      logo.classList.remove('inview');
      logoPc.classList.remove('inview');
      mBtn.classList.remove('inview');
      pcNav.classList.remove('inview');

    }
  });
}
const io2 = new IntersectionObserver(callback);
io2.observe(child);