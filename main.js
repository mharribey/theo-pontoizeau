// TRANSITIONS BETWEEN PAGES
const sPath = window.location.pathname;
const sPage = sPath.substring(sPath.lastIndexOf('/') + 1);

const content = document.querySelector(".content");
const buttons = document.getElementsByClassName("navbar-link");

document.addEventListener("DOMContentLoaded",()=>{
  setTimeout(function(){
      content.classList.remove("hidden");
      content.classList.add("is-ready");
    });
},100);


Array.from(buttons).forEach(button=>{
  button.addEventListener("click",()=>{
    content.classList.remove("is-ready");
    content.classList.add("remove");

    setTimeout(function(){
      if(sPage == "index.html" || sPage == "") {
        window.location.href = "pages/" + button.id +'.html';
      }else{
        if(button.id == "index"){
          window.location.href = "../" + button.id +'.html';
        }else{
          window.location.href = button.id +'.html';
        }
      }
    },500);
  });
});

// WORK LIST

const projects = document.getElementsByClassName("project-list");

Array.from(projects).forEach(proj=>{
  proj.addEventListener("click",()=>{
    Array.from(projects).forEach(proj2=>{
      proj2.children[0].children[0].style.display = "none";
      proj2.children[1].classList.remove("is-ready");
      proj2.children[1].classList.add("remove");
      proj2.children[1].style.height = "0";
      proj2.style.margin = "0";
    });
    proj.children[0].children[0].style.display = "block";
    proj.children[1].classList.remove("remove");
    proj.children[1].classList.add("is-ready");
    proj.children[1].style.height = "auto";
    if (proj.id == "video"){
      proj.style.margin = "10em 0 0";
    } else {
      proj.style.margin = "10em 0";
    }
  });
});
