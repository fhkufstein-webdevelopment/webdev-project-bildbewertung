
$("doucment").ready(function() {
  const nav = document.querySelector("#menu");
  const topOfNav = nav.OffsetTop;
  let fixNav = () => {
    console.log(topOfNav);
  };
  window.addEventListener("scroll", fixNav());
});